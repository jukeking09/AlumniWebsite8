<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\IDCardController;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



class LoginController extends Controller
{
    //Render the login form
    public function login(Request $request)
    {
        return view('login');
    }

    //Handle the login request
    public function authenticate(Request $request)
    {   
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();

        $role = $user ? $user->role_id : null;

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // prevent session fixation
            $user = Auth::user();
            // Store data in session
            session([
                'user_id' => Auth::id(),
                'user_name' => Auth::user()->first_name,
            ]);
            if($role === 1) {
                return redirect()->route('member.dashboard');
            } elseif ($role === 2) {
                return redirect()->route('users-dashboard');
            } elseif ($role === 3) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('home')->with('error', 'Unauthorized access.');
            }

        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    //Render the registration form
    public function register()
    {
        $titles = DB::table('titles')->orderBy('title')->pluck('title', 'id');
        $countryCodes = DB::table('country_codes')
            ->orderBy('code')
            ->selectRaw("id, CONCAT(code, ' - ', country_name) AS full_label")
            ->pluck('full_label', 'id');
        // Move 'Other' course to the bottom
        $courses = DB::table('courses')
            ->select('id', 'course_name')
            ->orderByRaw("CASE WHEN LOWER(course_name) = 'other' THEN 1 ELSE 0 END, course_name")
            ->pluck('course_name', 'id');

        // Move 'Other' department to the bottom
        $departments = DB::table('departments')
            ->select('id', 'department_name')
            ->orderByRaw("CASE WHEN LOWER(department_name) = 'other' THEN 1 ELSE 0 END, department_name")
            ->pluck('department_name', 'id');
        return view('register', compact('titles', 'countryCodes', 'courses', 'departments'));
    }

    //Handle the registration request
    public function store(Request $request)
    {
        // $photo = $request->file('photo');
        // if ($photo) {
        //     logger('Uploaded photo:');
        //     logger('Original Name: ' . $photo->getClientOriginalName());
        //     logger('MIME Type: ' . $photo->getMimeType());
        //     logger('Extension: ' . $photo->getClientOriginalExtension());
        // } else {
        //     logger('No photo received.');
        // }
        $validated = $request->validate([
            'title_id' => 'required|exists:titles,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'country_code_id' => 'required|exists:country_codes,id',
            'contact_number' => 'required|string|max:20',
            'year_of_passing' => 'required|integer|min:1934|max:' . date('Y'),
            'course_id' => 'required|exists:courses,id',
            'department_id' => 'required|exists:departments,id',
            'address' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'area_of_interest' => 'nullable|string|max:1000',
            'photo' => 'required|mimes:jpeg,jpg,png,webp,gif|max:3072',
        ]);
        //return error messages if validation fails
         if(validator($request->all())->fails()){
            return redirect()->back()->withErrors($validated)->withInput();
        }
        
        // dd($request->file('photo'));
        // Handle the image upload
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('profile_pictures', 'private');
        }

        $user = new User();
        $user->title_id = $request->input('title_id');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->country_code_id = $request->input('country_code_id');
        $user->contact_number = $request->input('contact_number');
        $user->year_of_passing = $request->input('year_of_passing');
        $user->course_id = $request->input('course_id');
        $user->department_id = $request->input('department_id');
        $user->address = $request->input('address');
        $user->designation = $request->input('designation');
        $user->area_of_interest = $request->input('area_of_interest');
        $user->profile_picture = $photoPath;
        $user->password = Hash::make($request->input('password'));
        $user->role_id = 2;
        $user->custom_id = 'temp'; // Set a temporary value to satisfy NOT NULL constraint
        $user->save();
        
        $year = $user->year_of_passing;
        $customId = "SACSAA/" . $year . "/" . $user->id;
        $user->custom_id = $customId;
        $user->save();
        

                // Create an instance of the other controller
        $idCardController = new IDCardController();

        // Generate the PDF
        $pdfContent = $idCardController->generateIdCardToMail($user->id);

        // Send the email with the PDF attached
        $emailResult = $this->sendRegistrationEmail($user->email, $user->first_name . ' ' . $user->last_name, $pdfContent);

        //Log::info('Email result: ' . $emailResult);
        // dd('Email result: ' . $emailResult);

        return redirect()->route('login')->with('success', 'Registration successful. You can now log in.');
    }

    public function sendRegistrationEmail($toEmail, $toName, $pdfContent)
        {
            $mail = new PHPMailer(true);

            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host = env('MAIL_HOST'); // Use .env settings
                $mail->SMTPAuth = true;
                $mail->Username = env('MAIL_USERNAME');
                $mail->Password = env('MAIL_PASSWORD');
                $mail->SMTPSecure = env('MAIL_ENCRYPTION');
                $mail->Port = env('MAIL_PORT');

                // Sender and recipient settings
                $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
                $mail->addAddress($toEmail, $toName);

                // Email content
                $mail->isHTML(true);
                $mail->Subject = 'SACSAA Registration';
                //$mail->Body    = "<h1>Dear $toName!</h1><p>Your registration for SACSAA was successful!</p><p>Please Find Your SACSAA ID Card Attached Below.</p>";
                //$mail->AltBody = "Welcome, $toName! Your registration for SACSAA was successful! Please Find Your SACSAA ID Card Attached Below.";
                
                // Embed the image in the email
                $mail->addEmbeddedImage('./img/SignaturePRES.png', 'signature');

                // Use the embedded image in the HTML content
                $mail->Body = "
                    <h1>Dear $toName!</h1>
                    <p>Your registration for SACSAA was successful!</p>
                    <p>Please find your SACSAA ID card attached below.</p>
                    <br>
                    <p>Yours truly,</p>
                    <p>President,</p>
                    <p>SACSAA</p>
                    <img src='cid:signature' alt='President Signature' style='width:100px; height:auto;'>
                ";

                $mail->AltBody = "
                    Dear $toName!
                    
                    Your registration for SACSAA was successful!
                    Please find your SACSAA ID card attached below.
                    
                    Yours truly,
                    President,
                    SACSAA
                ";
                
                $mail->addStringAttachment($pdfContent, 'IDCard.pdf', 'base64', 'application/pdf');

                // Send email
                $mail->send();
                return "Email sent successfully.";
            } catch (Exception $e) {
                return "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }





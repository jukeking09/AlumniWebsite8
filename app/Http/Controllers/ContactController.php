<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile' => 'required|string|max:15',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

       try {
            // Initialize PHPMailer
            $mail = new PHPMailer(true);
                // Server settings
                $mail->isSMTP();
                $mail->Host = env('MAIL_HOST'); // Use .env settings
                $mail->SMTPAuth = true;
                $mail->Username = env('MAIL_USERNAME');
                $mail->Password = env('MAIL_PASSWORD');
                $mail->SMTPSecure = env('MAIL_ENCRYPTION');
                $mail->Port = env('MAIL_PORT');

            // Email Sender & Recipient
            $mail->setFrom($validatedData['email'], $validatedData['name']);
            $mail->addAddress('alumni@anthonys.ac.in', 'Alumni Support'); // Replace with recipient email

            // Email Content
            $mail->isHTML(true);
            $mail->Subject = $validatedData['subject'];
            $mail->Body = "
                <h3>Contact Form Submission</h3>
                <p><strong>Name:</strong> {$validatedData['name']}</p>
                <p><strong>Email:</strong> {$validatedData['email']}</p>
                <p><strong>Mobile:</strong> {$validatedData['mobile']}</p>
                <p><strong>Message:</strong></p>
                <p>{$validatedData['message']}</p>
            ";

            // Send Email
            $mail->send();

            return back()->with('success', 'Your message has been sent successfully!');
        } catch (Exception $e) {
            return back()->with('error', 'There was an error sending your message. Please try again later.');
        }
    }
}

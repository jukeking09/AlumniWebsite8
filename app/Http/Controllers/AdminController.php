<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;
use App\Models\CountryCode;
use App\Models\Course;
use App\Models\Department;
use App\Models\Role;
use Illuminate\Support\Facades\Validator;
use App\Models\ProminentAlumnus;
use App\Models\User;
use App\Models\ExecutiveMember;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        // Just a dashboard home page, could link to other pages
        return view('admin.dashboard');
    }

    public function titles()
    {
        $titles = Title::all();
        return view('admin.addtitle', compact('titles'));
    }

    public function storeTitle(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Title::create(['title' => $request->title]);

        return redirect()->route('admin.titles.index')->with('success', 'Title added successfully.');
    }
  
    public function updateTitle(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $title = Title::findOrFail($id);
        $title->update(['title' => $request->title]);

        return redirect()->route('admin.titles.index')->with('success', 'Title updated successfully.');
    }

    public function countryCodes()
    {
        $countryCodes = CountryCode::all();
        return view('admin.addcountrycode', compact('countryCodes'));
    }

    public function storeCountryCode(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|string|max:10',
            'country_name' => 'required|string|max:255'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        CountryCode::create($request->only('code', 'country_name'));

        return redirect()->route('admin.country_codes.index')->with('success', 'Country code added successfully.');
    }
    public function updateCountryCode(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|string|max:10',
            'country_name' => 'required|string|max:255'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $countryCode = CountryCode::findOrFail($id);
        $countryCode->update($request->only('code', 'country_name'));

        return redirect()->route('admin.country_codes.index')->with('success', 'Country code updated successfully.');
    }

    public function courses()
    {
        $courses = Course::all();
        return view('admin.addcourse', compact('courses'));
    }

    public function storeCourse(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'course_name' => 'required|string|max:255'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Course::create(['course_name' => $request->course_name]);

        return redirect()->route('admin.courses.index')->with('success', 'Course added successfully.');
    }

    public function updateCourse(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'course_name' => 'required|string|max:255'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $course = Course::findOrFail($id);
        $course->update(['course_name' => $request->course_name]);

        return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully.');
    }

    public function departments()
    {
        $departments = Department::all();
        return view('admin.adddepartment', compact('departments'));
    }

    public function storeDepartment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'department_name' => 'required|string|max:255'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Department::create(['department_name' => $request->department_name]);

        return redirect()->route('admin.departments.index')->with('success', 'Department added successfully.');
    }

    public function updateDepartment(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'department_name' => 'required|string|max:255'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $department = Department::findOrFail($id);
        $department->update(['department_name' => $request->department_name]);

        return redirect()->route('admin.departments.index')->with('success', 'Department updated successfully.');
    }
    public function roles()
    {
        $roles = Role::all();
        return view('admin.addrole', compact('roles'));
    }

    public function storeRole(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'role_name' => 'required|string|max:255'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Role::create(['role_name' => $request->role_name]);

        return redirect()->route('admin.roles.index')->with('success', 'Role added successfully.');
    }

    public function updateRole(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'role_name' => 'required|string|max:255'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $role = Role::findOrFail($id);
        $role->update(['role_name' => $request->role_name]);

        return redirect()->route('admin.roles.index')->with('success', 'Role updated successfully.');
    }
     public function alumnis()
    {
        $prominentalumni = ProminentAlumnus::all();
        return view('admin.addprominentalumni', compact('prominentalumni'));
    }

    public function storeAlumni(Request $request)
    {
        $request->validate([
            'alumniname' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Handle file upload
        $photoPath = $request->file('photo')->store('alumni_photos', 'private');

        ProminentAlumnus::create([
            'alumniname' => $request->alumniname,
            'description' => $request->description,
            'photo' => $photoPath,
        ]);

        return redirect()->back()->with('success', 'Alumnus added successfully!');
    }

    public function updateAlumni(Request $request, $id)
    {
        $request->validate([
            'alumniname' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'nullable|mimes:jpg,png,jpeg|max:2048',
        ]);

        $alumni = ProminentAlumnus::findOrFail($id);
        $alumni->alumniname = $request->alumniname;
        $alumni->description = $request->description;

        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($alumni->photo) {
                Storage::disk('private')->delete($alumni->photo);
            }
            // Store new photo
            $alumni->photo = $request->file('photo')->store('alumni_photos', 'private');
        }

        $alumni->save();

        return redirect()->route('admin.alumnis.index')->with('success', 'Alumnus updated successfully!');
    }

    public function showImage($filename) {
        $path = storage_path('app/private/alumni_photos/' . $filename);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path);
    }

    // Manage Users
    public function users()
    {
        $users = User::with('role')->get();
        $roles = Role::all();
        return view('admin.manageusers', compact('users', 'roles'));
    }

    public function updateUserRole(Request $request, $id)
    {
        $request->validate([
            'role_id' => 'required|exists:roles,id',
        ]);
        $user = User::findOrFail($id);
        $user->role_id = $request->role_id;
        $user->save();
        return redirect()->route('admin.users.index')->with('success', 'User role updated successfully.');
    }

    public function executiveMembers()
    {
        $executiveMembers = ExecutiveMember::all();
        return view('admin.addexecutivemembers', compact('executiveMembers'));
    }

    public function storeExecutiveMember(Request $request)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'post' => 'required|string|max:255',
        'picture' => 'required|mimes:jpg,jpeg,png|max:2048',
    ]);

    // Store in private disk under executive_photos/
    $picturePath = $request->file('picture')->store('executive_photos', 'private');

    ExecutiveMember::create([
        'name' => $request->name,
        'post' => $request->post,
        'picture' => $picturePath, // Will be like executive_photos/filename.jpg
    ]);

    return redirect()->route('admin.executive_members.index')
        ->with('success', 'Executive member added successfully!');
    }

    public function updateExecutiveMember(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'post' => 'required|string|max:255',
            'picture' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        ]);
        $executiveMember = ExecutiveMember::findOrFail($id);
        $executiveMember->name = $request->name;
        $executiveMember->post = $request->post;
        if ($request->hasFile('picture')) {
            // Delete old picture if exists
            if ($executiveMember->picture) {
                Storage::disk('private')->delete($executiveMember->picture);
            }
            // Store new picture
            $executiveMember->picture = $request->file('picture')->store('executive_photos', 'private');
        }
        $executiveMember->save();
        return redirect()->route('admin.executive_members.index')
            ->with('success', 'Executive member updated successfully!');
    }

    public function disableExecutiveMember($id)
    {
        $executiveMember = ExecutiveMember::findOrFail($id);
        $executiveMember->active = false; // Assuming you have an 'active' column
        $executiveMember->save();
        return redirect()->route('admin.executive_members.index')
            ->with('success', 'Executive member disabled successfully!');
    }
    public function enableExecutiveMember($id)
    {
        $executiveMember = ExecutiveMember::findOrFail($id);
        $executiveMember->active = true; // Assuming you have an 'active' column
        $executiveMember->save();
        return redirect()->route('admin.executive_members.index')
            ->with('success', 'Executive member enabled successfully!');
    }
    public function showExecutiveMemberImage($filename)
    {
        $path = storage_path('app/private/executive_photos/' . $filename);
        if (!file_exists($path)) {
            abort(404);
        }
        return response()->file($path);
    }


}

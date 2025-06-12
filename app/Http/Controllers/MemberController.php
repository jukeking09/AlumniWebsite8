<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function dashboard()
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'You must be logged in to access the dashboard.');
        }
        // Check if the user is a member
        if (Auth::user()->role_id !== 1) {
            return redirect('/login')->with('error', 'You do not have permission to access the member dashboard.');
        }
        // If the user is a member, proceed to the dashboard
        $events = Event::all();
        return view('member.dashboard', compact('events'));
    }
    public function logout(Request $request)
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/login')->with('success', 'You have been logged out.');
    }
    public function editProfile()
    {
        return view('users.edit', [
            'user' => User::findOrFail(Auth::id()),
            'titles' => DB::table('titles')->pluck('title', 'id'),
            'countryCodes' => DB::table('country_codes')->pluck('code', 'id'),
            'courses' => DB::table('courses')->pluck('course_name', 'id'),
            'departments' => DB::table('departments')->pluck('department_name', 'id'),
        ]);
    }
    public function changePasswordForm()
    {
        return view('users.changepassword');
    }

    public function updateProfile(Request $request)
    {
        $user = User::findOrFail(Auth::id());
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'department_id' => 'nullable|exists:departments,id',
            'course_id' => 'nullable|exists:courses,id',
            'title_id' => 'nullable|exists:titles,id',
            'country_code_id' => 'nullable|exists:country_codes,id',
            'area_of_interest' => 'nullable|string|max:255',
            'year_of_passing' => 'nullable|integer|min:1934|max:' . date('Y'),
        ]);

        $year = $user->year_of_passing;
        $customId = "SACSAA/" . $year . "/" . $user->id;
        $user->custom_id = $customId;
        $user->update($data);

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }


    public function changePassword(Request $request)
    {
        $user = User::findOrFail(Auth::id());

        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        if (!Hash::check($request->input('current_password'), $user->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }

        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        return redirect()->back()->with('success', 'Password changed successfully.');
    }

}

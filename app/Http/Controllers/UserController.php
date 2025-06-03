<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/login')->with('success', 'You have been logged out.');
    }

     public function dashboard()
    {
        return view('users.dashboard');
    }

    public function profile()
    {
        return view('users.profile');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->country_code = $request->input('country_code');
        $user->address = $request->input('address');
        $user->designation = $request->input('designation');
        $user->department_id = $request->input('department_id');
        $user->course_id = $request->input('course_id');
        $user->title_id = $request->input('title_id');
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();
        $currentPassword = $request->input('current_password');
        $newPassword = $request->input('new_password');
        if($currentPassword == DB::table('users')->where('id', $user->id)->value('password')){
            if (Hash::check($currentPassword, $user->password)) {
                $user->password = Hash::make($newPassword);
                $user->save();

                return redirect()->back()->with('success', 'Password changed successfully.');
            } else {
                return redirect()->back()->with('error', 'Current password is incorrect.');
            }
        }
        else{
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }
    }

}

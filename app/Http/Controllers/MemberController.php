<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Event;

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

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use App\Models\ProminentAlumnus;
use App\Models\ExecutiveMember;
use App\Models\Department;

class HomeController extends Controller
{
    public function home()
    {
        $eventCount = Event::count(); // Get the total count of events
        $userCount = User::count();   // Get the total count of users
        $prominentalumni = ProminentAlumnus::all();
        $executiveMembers = ExecutiveMember::where('active', true)->get();
        $departments = Department::all();

        return view('index', compact('eventCount', 'userCount', 'prominentalumni', 'executiveMembers', 'departments'));
    }

    public function about()
    {
        return view('about');
    }

    public function appoinment()
    {
        return view('appoinment');
    }

    public function team()
    {
        return view('team');
    }

    public function constitution()
    {
        return view('constitution');
    }

    public function connect()
    {
        return view('connect');
    }

    public function executivebody()
    {
        $executiveMembers = ExecutiveMember::where('active', true)->get();
        return view('executivebody', compact('executiveMembers'));
    }

    public function giveback()
    {
        return view('giveback');
    }

}

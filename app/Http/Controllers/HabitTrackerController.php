<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HabitTrackerController extends Controller
{
    public function index()
    {
        return view('habit_tracker', [
            'title' => 'ClockWork - Habit Tracker',
            'hideNavbar' => false,
            'hideFooter' => false,
        ]);
    }
}

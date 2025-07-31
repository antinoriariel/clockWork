<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HabitTrackerController extends Controller
{
    public function index()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        
        // Render the habit tracker view with the title and visibility settings
        return view('habit_tracker', [
            'title' => 'ClockWork - Habit Tracker',
            'hideNavbar' => false,
            'hideFooter' => false,
        ]);
    }
}

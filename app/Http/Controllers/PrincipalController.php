<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    // Muestra la vista principal
    public function main()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        // Variable del título para la vista
        $title = 'ClockWork - Principal';
        return view('principal', compact('title'));
    }
}

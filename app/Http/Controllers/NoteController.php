<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        return view('notes', [
            'title' => 'ClockWork - Notes',
            'hideNavbar' => false,
            'hideFooter' => false,
        ]);
    }
}

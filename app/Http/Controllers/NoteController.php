<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        return view('notes', [
            'title' => 'ClockWork - Notes',
            'hideNavbar' => false,
            'hideFooter' => false,
        ]);
    }
}

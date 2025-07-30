<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        // Variable del título para la vista
        $title = 'ClockWork - Login';
        return view('login', compact('title'));
    }
}

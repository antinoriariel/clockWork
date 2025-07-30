<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        // Variable del título para la vista
        $title = 'ClockWork - Login';

        // Ocultar la barra de navegación y el pie de página
        $hideNavbar = true;
        $hideFooter = true;
        return view('login', compact('title', 'hideNavbar', 'hideFooter'));
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

Route::get('/', [PrincipalController::class, 'main'])->name('main');
Route::get('/login', [LoginController::class, 'main'])->name('login');
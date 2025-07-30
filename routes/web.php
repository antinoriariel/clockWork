<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\LoginController;

Route::get('/', [PrincipalController::class, 'main'])->name('main');
Route::get('/login', [LoginController::class, 'index'])->name('login');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HabitTrackerController;
use App\Http\Controllers\NoteController;

Route::get('/', [PrincipalController::class, 'main'])->name('main');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/habit-tracker', [App\Http\Controllers\HabitTrackerController::class, 'index'])->name('habit-tracker');
Route::get('/notes', [App\Http\Controllers\NoteController::class, 'index'])->name('notes');

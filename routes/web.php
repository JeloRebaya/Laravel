<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('index');
});

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'performlogin'])->name('login');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login')->with('success', 'You have logged out successfully.');
})->name('logout');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

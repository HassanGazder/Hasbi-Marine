<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;

// Homepage Route
Route::get('/', function () {
    return view('home');
})->name('home');

// About Page Route
Route::get('/about', function () {
    return view('about');
})->name('about');

// Services Page Route
Route::get('/services', function () {
    return view('services');
})->name('services');


// Contact Page Route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/signup', [SignupController::class, 'showForm'])->name('signup.form');
Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login'); // Redirect to login page after logout
})->name('logout');


Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');

Route::get('/services', [ServiceController::class, 'index'])->name('services'); 


Route::get('/dashboard', [ServiceController::class, 'dashboard'])->name('dashboard');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
Route::post('/services/update/{id}', [ServiceController::class, 'update'])->name('services.update');
Route::delete('/services/delete/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');








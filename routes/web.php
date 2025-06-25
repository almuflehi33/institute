<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

//Student 
// Student Dashboard
Route::prefix('student')->group(function () {
    Route::middleware('auth:student')->group(function () {
        Route::get(
            '/dashboard',
            function () {
                return view('student.dashboard');
            }
        )->name('student.dashboard');
    });

    // Student Registration
    Route::get(
        '/register',
        function () {
            return view('student-register');
        }
    )->name('register');
    Route::post(
        '/register',
        [StudentsController::class, 'store']
    )->name('register');
    //Student Login
    Route::get('/login', function () {
        return view('student-login');
    })->name('login');
    Route::post(
        '/login',
        [StudentsController::class, 'login_student']
    )->name('login');
});

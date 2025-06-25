<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/login',fn () => 'please login first')->name('login');
//Student 
// Student Dashboard
Route::prefix('student')->group(function () {
    Route::middleware('auth:customer')->group(function () {
        Route::get(
            '/student/dashboard',
            function () {
                return view('student.dashboard');
            }
        )->name('student.dashboard');
    });

    // Student Registration
    Route::get(
        '/student-register',
        function () {
            return view('student-register');
        }
    )->name('student-register');
    Route::post(
        '/register-student',
        [StudentsController::class, 'store']
    )->name('register-student');
    //Student Login
    Route::get('/student-login', function () {
        return view('student-login');
    })->name('student.login');
    Route::post(
        '/login-student',
        [StudentsController::class, 'login_student']
    )->name('login-student');
});

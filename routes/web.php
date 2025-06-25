<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;
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


//Teacher 
// Teacher Dashboard
Route::prefix('teacher')->group(function () {
    Route::middleware('auth:teacher')->group(function () {
        Route::get(
            '/dashboard',
            function () {
                return view('teacher.dashboard');
            }
        )->name('teacher.dashboard');
    });

    // Teacher Registration
    Route::get(
        '/register',
        function () {
            return view('teacher-register');
        }
    )->name('register');
    Route::post(
        '/register',
        [TeachersController::class, 'store']
    )->name('register');
    //Teacher Login
    Route::get('/login', function () {
        return view('teacher-login');
    })->name('login');
    Route::post(
        '/login',
        [TeachersController::class, 'login_teacher']
    )->name('login');
});

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
Route::get('/student-register', function () {
    return view('student-register');
});

Route::post(
    '/app-layout-student',
    //  function () {
    //     return view('student.dashboard');
    // }
    // [StudentsController::class, 'register']
)->name('student.dashboard');

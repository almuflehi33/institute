<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/app-layout', function () {
    return view('admin.dashboard');
});


//Student 
Route::get('/student-register', function () {
    return view('student-register');
});

Route::get('/app-layout-student', function () {
    return view('student.dashboard');
});
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/app-layout', function () {
    return view('admin.dashboard');
});
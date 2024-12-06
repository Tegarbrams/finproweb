<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'TESTTT']);
});

Route::get('home', function () {
    return view ('kerangka/dashboard');
});
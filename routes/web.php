<?php

use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view ('kerangka/dashboard');
});

Route::get('/form', function () {
    return view ('kerangka/form');
});

Route::get('/daftarPasien', function () {
    return view ('kerangka/tabel');
});
Route::get('/Stok', function () {
    return view ('kerangka/Stok');
});
Route::get('/', function () {
    return view ('Login');
});
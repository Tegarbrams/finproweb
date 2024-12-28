<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
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
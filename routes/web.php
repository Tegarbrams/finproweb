<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\ObatController;


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
    return view ('kerangka/dashboard');
});
Route::get('/dokter', function () {
    return view ('kerangka/dokter');
});
Route::get('/perawat', function () {
    return view ('kerangka/perawat');
});

// Route::resource('pasien', PasienController::class);

Route::post('/data', [DataController::class, 'store'])->name('data.store');
Route::put('/data/{id}', [DataController::class, 'update'])->name('data.update');

// Route::resource('pasien', PasienController::class);
// Route::get('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');
// Route::post('/pasien', [PasienController::class, 'store'])->name('pasien.store');



// // Route untuk menyimpan data pasien
// Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');

// terbaru

Route::get('/post', [PostController::class, 'index'] )->name('post.index');
Route::post('/post/create', [PostController::class, 'create'] )->name('post.create');
Route::post('/post', [PostController::class, 'store'] )->name('post.store');
Route::get('/post/{id}', [PostController::class, 'show'] )->name('post.show');
// Route::get('/post/{id}/edit', [PostController::class, 'edit'] )->name('post.edit');
// Route::get('/post/{id}', [PostController::class, 'update'] )->name('post.update');
// Route::delete('/post/{id}', [PostController::class, 'delete'] )->name('post.update');

Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update');
Route::delete('/post/{id}', [PostController::class,'destroy'] )->name('post.destroy');

Route::resource('obat', ObatController::class);
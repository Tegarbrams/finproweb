<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PerawatController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User;


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
Route::get('/', [PostController::class, 'jumlah_pasien']);
// Route::get('/post/{id}/edit', [PostController::class, 'edit'] )->name('post.edit');
// Route::get('/post/{id}', [PostController::class, 'update'] )->name('post.update');
// Route::delete('/post/{id}', [PostController::class, 'delete'] )->name('post.update');

Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update');
Route::delete('/post/{id}', [PostController::class,'destroy'] )->name('post.destroy');

Route::resource('obat', ObatController::class);
Route::put('/obat/{id}', [ObatController::class, 'update'])->name('obat.update');

Route::resource('perawat', PerawatController::class);
Route::put('/perawat/{id}', [PerawatController::class, 'update'])->name('perawat.update');

Route::resource('dokter', DokterController::class);
Route::put('/dokter/{id}', [DokterController::class, 'update'])->name('dokter.update');


// Route::get('login', [AuthController::class, 'login'])->name('login');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashboard', function () {
    return 'Selamat datang di Dashboard!';
})->middleware('auth');

require __DIR__.'/auth.php';
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

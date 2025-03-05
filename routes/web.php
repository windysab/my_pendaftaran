<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GugatanController;

// Ubah dari view('home.blade') menjadi view('home')
Route::get('/', function () {
    return view('home');
});

Route::get('/gugatan', function () {
    return view('daftar_gugatan');
})->name('gugatan.index');

Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');

Route::get('/permohonan/create', function () {
    return view('permohonan.create');
})->name('permohonan.create');

Route::get('/sidang', function () {
    return view('daftar_sidang');
})->name('sidang.index');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/gugatan/create', function () {
    return view('gugatan.create');
})->name('gugatan.create');

Route::get('/gugatan/page2', function () {
    return view('gugatan.gugatan-page2');
})->name('gugatan.page2');

Route::post('/gugatan/page2', function () {
    return view('gugatan.gugatan-page2');
})->name('gugatan.page2');

Route::get('/gugatan/page3', function () {
    return view('gugatan.gugatan-page3');
})->name('gugatan.page3');
// Ganti route POST yang salah
Route::post('/gugatan/page2', [GugatanController::class, 'page2'])->name('gugatan.page2');
Route::post('/gugatan/page3', [GugatanController::class, 'page3'])->name('gugatan.page3');
Route::post('/gugatan/page3', [GugatanController::class, 'storePage3'])->name('gugatan.storePage3');
Route::post('/gugatan', [GugatanController::class, 'store'])->name('gugatan.store');
Route::post('/gugatan/store', [GugatanController::class, 'store'])->name('gugatan.store');

// Tambahkan route untuk halaman sukses jika belum ada
Route::get('/gugatan/sukses/{id}', [GugatanController::class, 'sukses'])->name('gugatan.sukses');

// Gugatan routes
Route::get('/gugatan', [GugatanController::class, 'index'])->name('gugatan.index');
Route::get('/gugatan/create', [GugatanController::class, 'create'])->name('gugatan.create');
Route::post('/gugatan', [GugatanController::class, 'store'])->name('gugatan.store');

// Multi-step form routes
Route::get('/gugatan/page2', [GugatanController::class, 'page2'])->name('gugatan.page2');
// Hapus route yang duplicate
// Remove duplicate routes and fix flow
Route::post('/gugatan/store-page2', [GugatanController::class, 'storePage2'])
     ->name('gugatan.storePage2');

Route::post('/gugatan/store-page3', [GugatanController::class, 'storePage3'])
     ->name('gugatan.storePage3');
Route::post('/gugatan/page3', [GugatanController::class, 'storePage3'])->name('gugatan.storePage3');
Route::get('/gugatan/page2', [GugatanController::class, 'showPage2'])->name('gugatan.page2');
// Add this route for page3
Route::get('/gugatan/page3', [GugatanController::class, 'showPage3'])->name('gugatan.page3');


Route::get('/gugatan/sukses/{id}', [GugatanController::class, 'sukses'])->name('gugatan.sukses');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GugatanController;

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

Route::post('/gugatan/page2', function () {
    return view('gugatan.gugatan-page2');
})->name('gugatan.page2');

Route::post('/gugatan/page3', function () {
    return view('gugatan.gugatan-page3');
})->name('gugatan.page3');

Route::post('/gugatan/store', [GugatanController::class, 'store'])->name('gugatan.store');

Route::get('/gugatan/sukses', function () {
    return view('gugatan.gugatan-sukses');
})->name('gugatan.sukses');

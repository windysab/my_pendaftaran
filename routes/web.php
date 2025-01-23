<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/gugatan/create', function () {
    return view('gugatan.create');
});

Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');

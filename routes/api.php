<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndoregionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Hapus sementara middleware 'auth:sanctum' untuk pengujian
Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/kabupaten/search', [IndoregionController::class, 'searchKabupaten']);
Route::get('/kabupaten', [IndoregionController::class, 'getKabupaten']);
Route::get('/kecamatan/{kabupatenId}', [IndoregionController::class, 'getKecamatan']);
Route::get('/desa/{kecamatanId}', [IndoregionController::class, 'getDesa']);

Route::get('/test', function () {
    return response()->json(['message' => 'API is working']);
});

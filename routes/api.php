<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\IndoregionController;





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

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClienteApiController;
use App\Http\Controllers\Api\MascotaApiController;


Route::prefix('v1')->group(function () {
    Route::resource('clientes', ClienteApiController::class);
});
Route::prefix('v1')->group(function () {
    Route::resource('mascotas', MascotaApiController::class);
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

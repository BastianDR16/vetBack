<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MascotaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('clientes', ClienteController::class);
Route::resource('mascotas', MascotaController::class);
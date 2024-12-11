<?php

use App\Http\Controllers\PortoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PortoController::class, 'home']);
Route::get('/acc/portofolio', [PortoController::class, 'portofolio']);
Route::get('/acc/kontak', [PortoController::class, 'kontak']);
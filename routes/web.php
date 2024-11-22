<?php

use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});


Route::get('/anggota', [AnggotaController::class, 'anggota'])->name('anggota');

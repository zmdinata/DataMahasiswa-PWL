<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\WelcomeController;

// Halaman utama dan welcome
Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', [WelcomeController::class, 'index']);

// CRUD Routes untuk Mahasiswa
Route::resource('mahasiswa', MahasiswaController::class);
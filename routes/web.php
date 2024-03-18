<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TimController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasukController;
use Illuminate\Support\Facades\Route;

// HALAMAN
Route::get('/beranda', [DashboardController::class, 'index']);
Route::get('/contactus', [ContactUsController::class, 'index']);
Route::get('/tim', [TimController::class, 'index']);
// HALAMAN

// AUTENTIKASI
Route::get('/', [MasukController::class, 'index']);
Route::get('/daftar', [DaftarController::class, 'index']);
// AUTENTIKASI

// PROSES
Route::post('/prosesmasuk', [AuthController::class, 'prosesmasuk']);
Route::post('/prosesdaftar', [DaftarController::class, 'prosesdaftar']);
// PROSES
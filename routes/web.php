<?php

use App\Http\Controllers\TimController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasukController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index']);

Route::get('/contactus', [ContactUsController::class, 'index']);

Route::get('/tim', [TimController::class, 'index']);

Route::get('/masuk', [MasukController::class, 'index']);
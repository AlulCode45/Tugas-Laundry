<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KasirController;
use App\Http\Middleware\KasirMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'LoginView']);
Route::post('login', [AuthController::class, 'Login']);

Route::middleware(KasirMiddleware::class)->group(function () {
    Route::get('/kasir', [KasirController::class, 'Dashboard']);
});

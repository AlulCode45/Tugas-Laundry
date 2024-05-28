<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KasirController;
use App\Http\Middleware\KasirMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'LoginView']);
Route::post('login', [AuthController::class, 'Login']);

Route::middleware(KasirMiddleware::class)->group(function () {
    Route::get('/logout', [AuthController::class, 'Logout']);
    Route::prefix('/kasir')->group(function () {
        Route::get('/', [KasirController::class, 'Dashboard']);
        Route::get('/kelola-pemesanan', [KasirController::class, 'KelolaPemesanan']);
        Route::get('/kelola-laporan', [KasirController::class, 'KelolaLaporan']);
        Route::get('/kelola-invoice', [KasirController::class, 'KelolaInvoice']);
    });
});

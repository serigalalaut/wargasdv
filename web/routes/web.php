<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SdvController;


Route::get('/', [SdvController::class, 'index']);
Route::get('/ipl', [SdvController::class, 'ipl']);
Route::get('/ipl-confirmation', [SdvController::class, 'confirmation']);
Route::get('/laporan', [SdvController::class, 'laporan_keuangan']);
Route::get('/pengeluaran', [SdvController::class, 'Pengeluaran']);
Route::get('/laporan-keuangan', [SdvController::class, 'laporan_kas']);
Route::get('/aspirasi-warga', [SdvController::class, 'aspirasi']);
Route::post('/send-aspirasi', [SdvController::class, 'sendAspirasi']);
Route::get('/rekap-ipl', [SdvController::class, 'rekap_ipl']);

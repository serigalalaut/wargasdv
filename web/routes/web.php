<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SdvController;


Route::get('/', [SdvController::class, 'index']);
Route::get('/ipl', [SdvController::class, 'ipl']);
Route::get('/laporan', [SdvController::class, 'laporan_keuangan']);
Route::get('/pengeluaran', [SdvController::class, 'Pengeluaran']);
Route::get('/laporan-keuangan', [SdvController::class, 'laporan_kas']);

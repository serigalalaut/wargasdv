<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SdvController;


Route::get('/', [SdvController::class, 'index']);
Route::get('/payment', [SdvController::class, 'payment']);

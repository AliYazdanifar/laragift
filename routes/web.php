<?php

use App\Http\Controllers\GiftController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GiftController::class, 'index'])->name('gift.index');
Route::post('/', [GiftController::class, 'suggest'])->name('gift.store');


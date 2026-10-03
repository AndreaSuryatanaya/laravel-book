<?php

use App\Http\Controllers\Api\BookController;
use Illuminate\Support\Facades\Route;

// 2. Masuk ke Route
Route::apiResource('books', BookController::class);
Route::get('health', [BookController::class, 'health']);

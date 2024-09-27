<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return "view('welcome')";
});

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'showAll']);
    Route::get('/{productId}', [ProductController::class, 'showOne']);

    Route::get('/{productId}/reviews', [ReviewController::class, 'showAll']);
    Route::post('/{productId}/reviews', [ReviewController::class, 'store']);
});

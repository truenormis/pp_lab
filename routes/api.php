<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\StoreController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api')->name('logout');
Route::post('/refresh', [AuthController::class, 'refresh'])->middleware('auth:api')->name('refresh');
Route::post('/me', [AuthController::class, 'me'])->middleware('auth:api')->name('me');

Route::prefix('cities')->group(function () {
    Route::get('/', [CityController::class, 'index']);
    Route::post('/', [CityController::class, 'store'])->middleware('auth:api');
    Route::get('/{city}', [CityController::class, 'show']);
    Route::get('/{city}/stores', [CityController::class, 'stores']);
    Route::put('/{city}', [CityController::class, 'update'])->middleware('auth:api');
    Route::delete('/{city}', [CityController::class, 'destroy'])->middleware('auth:api');
});

Route::prefix('stores')->group(function () {
    Route::get('/', [StoreController::class, 'index']);
    Route::post('/', [StoreController::class, 'store'])->middleware('auth:api');
    Route::get('/{store}', [StoreController::class, 'show']);
    Route::put('/{store}', [StoreController::class, 'update'])->middleware('auth:api');
    Route::delete('/{store}', [StoreController::class, 'destroy'])->middleware('auth:api');
    Route::get('/{store}/products', [StoreController::class, 'products']);
});

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::post('/', [ProductController::class, 'store'])->middleware('auth:api');
    Route::get('/{product}', [ProductController::class, 'show']);
    Route::put('/{product}', [ProductController::class, 'update'])->middleware('auth:api');
    Route::delete('/{product}', [ProductController::class, 'destroy'])->middleware('auth:api');
});

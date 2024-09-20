<?php

use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\StoreController;
use App\Http\Resources\Store\StoreResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('cities')->group(function () {

    Route::get('/', [CityController::class, 'index']);
    Route::post('/', [CityController::class, 'store']);

    Route::get('/{city}', [CityController::class, 'show']);
    Route::get('/{city}/stores', [CityController::class, 'stores']);

    Route::put('/{city}', [CityController::class, 'update']);

    Route::delete('/{city}', [CityController::class, 'destroy']);
});

Route::prefix('stores')->group(function () {
    Route::get('/{store}', [StoreController::class, 'show']);
    Route::get('/{store}/products', [StoreController::class, 'products']);
});

Route::prefix('products')->group(function () {
    Route::get('/{product}', [ProductController::class, 'show']);
});

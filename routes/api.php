<?php

use App\Http\Controllers\Api\CityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('cities')->group(function () {
    Route::get('/', [CityController::class, 'index']);
    Route::post('/', [CityController::class, 'store']);
    Route::get('/{city}', [CityController::class, 'show']);
    Route::put('/{city}', [CityController::class, 'update']);
    Route::delete('/{city}', [CityController::class, 'destroy']);
});

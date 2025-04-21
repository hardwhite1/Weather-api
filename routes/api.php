<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WeatherController;

Route::get('/weather', [WeatherController::class, 'getWeather']);

Route::get('/ping', function () {
    return response()->json(['message' => 'API is working']);
});

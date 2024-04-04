<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\WeatherController;

Route::get('/weather/{city}', [WeatherController::class, 'getWeather']);
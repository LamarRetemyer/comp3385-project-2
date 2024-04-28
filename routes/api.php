<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\FavouriteController;

// Group all API routes under the 'api/v1' prefix
Route::prefix('api/v1')->group(function () {
    // User authentication routes
    Route::post('/auth/register', [UserController::class, 'register']);
    Route::post('/auth/login', [UserController::class, 'login']);
    Route::post('/auth/logout', [UserController::class, 'logout']);

    // Car routes
    Route::get('/cars', [CarController::class, 'index']); // List all cars
    Route::post('/cars', [CarController::class, 'store']); // Add a new car
    Route::get('/cars/{car}', [CarController::class, 'show']); // Get details of a specific car

    // Favourite routes
    Route::post('/cars/{car}/favourite', [FavouriteController::class, 'store']); // Add car to favourites
    Route::get('/users/{user}/favourites', [FavouriteController::class, 'index']); // Get user's favourite cars

    // Search cars
    Route::get('/search', [CarController::class, 'search']); // Search for cars by make or model

    // Additional user routes
    Route::get('/users/{user}', [UserController::class, 'show']); // Get user details
});

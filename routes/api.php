<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\FavouriteController;

// Group all API routes under the 'api/v1' prefix for version management
Route::prefix('api/v1')->group(function () {
    // Authentication Routes
    Route::post('/auth/register', [AuthController::class, 'register']);
    Route::post('/auth/login', [AuthController::class, 'authenticate']);
    Route::post('/auth/logout', [AuthController::class, 'logout']);

    // User Routes
    Route::middleware('auth:api')->group(function () {
        Route::get('/user', [AuthController::class, 'getAuthenticatedUser']); // Get details of the authenticated user
        Route::get('/users/{user}', [UserController::class, 'show']); // Get details of a specific user
        Route::put('/users/{user}', [UserController::class, 'update']); // Update a specific user
    });

    // Car Routes
    Route::get('/cars', [CarController::class, 'index']); // List all cars
    Route::post('/cars', [CarController::class, 'store']); // Add a new car
    Route::get('/cars/{car}', [CarController::class, 'show']); // Get details of a specific car

    // Favourite Routes
    Route::middleware('auth:api')->group(function () {
        Route::post('/cars/{car}/favourite', [FavouriteController::class, 'store']); // Add car to favourites
        Route::get('/users/{user}/favourites', [FavouriteController::class, 'index']); // Get user's favourite cars
    });

    // Search Route
    Route::get('/search', [CarController::class, 'search']); // Search for cars by make or model
});

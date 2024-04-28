<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    /**
     * Store a new favourite in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $carId
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request, $carId)
    {
        $user = Auth::user(); // Get the authenticated user

        // Check if the car exists and if it is already favourited
        $car = Car::find($carId);
        if (!$car) {
            return response()->json(['message' => 'Car not found'], 404);
        }

        if ($user->favourites()->where('car_id', $carId)->exists()) {
            return response()->json(['message' => 'Car already favourited'], 409);
        }

        // Create the favourite
        $favourite = new Favourite();
        $favourite->user_id = $user->id;
        $favourite->car_id = $carId;
        $favourite->save();

        return response()->json([
            'message' => 'Car added to favourites successfully',
            'favourite' => $favourite
        ], 201);
    }

    /**
     * Display a list of all favourite cars for a specific user.
     *
     * @param  int  $userId
     * @return \Illuminate\Http\JsonResponse
     */
    public function index($userId)
    {
        $user = User::find($userId);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $favourites = $user->favourites()->with('car')->get();

        return response()->json($favourites);
    }
}

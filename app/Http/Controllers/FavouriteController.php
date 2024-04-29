<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    public function store(Request $request, $carId)
    {
        $user = Auth::user();

        $car = Car::find($carId);
        if (!$car) {
            return response()->json(['message' => 'Car not found'], 404);
        }

        if ($user->favourites()->where('car_id', $carId)->exists()) {
            return response()->json(['message' => 'Car already favourited'], 409);
        }

        $favourite = new Favourite();
        $favourite->user_id = $user->id;
        $favourite->car_id = $carId;
        $favourite->save();

        return response()->json([
            'message' => 'Car added to favourites successfully',
            'favourite' => $favourite
        ], 201);
    }

    public function index($userId)
    {
        $user = User::find($userId);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $favourites = $user->favourites()->with('car')->get();

        return response()->json($favourites);
    }

    public function destroy($carId)
    {
        $user = Auth::user();
        $favourite = $user->favourites()->where('car_id', $carId)->first();
        if (!$favourite) {
            return response()->json(['message' => 'Favourite not found'], 404);
        }

        $favourite->delete();

        return response()->json(['message' => 'Car removed from favourites successfully'], 200);
    }
}

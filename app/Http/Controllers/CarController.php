<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of all cars.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $cars = Car::all();
        return response()->json($cars);
    }

    /**
     * Store a newly created car in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'colour' => 'required|string|max:255',
            'year' => 'required|digits:4',
            'transmission' => 'required|string|max:255',
            'car_type' => 'required|string|max:255',
            'price' => 'required|numeric',
            'photo' => 'nullable|image|max:2048', // 2MB Max
            'user_id' => 'required|integer|exists:users,id'
        ]);

        $car = new Car($request->all());
        if ($request->hasFile('photo')) {
            $filename = $request->photo->store('photos', 'public');
            $car->photo = $filename;
        }
        $car->save();

        return response()->json([
            'message' => 'Car successfully added',
            'car' => $car
        ], 201);
    }

    /**
     * Display the specified car.
     *
     * @param  Car $car
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Car $car)
    {
        return response()->json($car);
    }

    /**
     * Search for cars by make or model.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|string'
        ]);

        $query = $request->query('query');
        
        $cars = Car::where('make', 'LIKE', "%{$query}%")
                    ->orWhere('model', 'LIKE', "%{$query}%")
                    ->get();

        return response()->json($cars);
    }
}

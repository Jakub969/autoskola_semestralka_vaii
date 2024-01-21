<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('users.update-car', compact('cars'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'car_brand' => 'required',
            'model' => 'required',
            'year' => 'required',
            'license_plate' => 'required',
            'type' => 'required',
        ]);

        $car = Car::create($validatedData);

        return redirect()->route('update-car');
    }

    public function update(Request $request, Car $car)
    {
        $validatedData = $request->validate([
            'car_brand' => 'required|max:255',
            'model' => 'required|max:255',
            'year' => 'required|integer',
            'license_plate' => 'required|max:255',
            'type' => 'required|max:255',
        ]);
        $car->update($validatedData);
        return response()->json(['success' => 'Autá boli úspešne aktualizované']);
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return Redirect::to('/users/update-car');
    }
}

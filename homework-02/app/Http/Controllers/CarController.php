<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Car;

class CarController extends Controller
{
    public function viewAllCars()
    {
        $cars = Car::orderBy('created_at', 'DESC')->get();

        return view('all-cars')->with('cars', $cars);
    }

    public function addCar(Request $request)
    {
        Car::create([
            'name' => $request->name,
            'make' => $request->make,
            'model' => $request->model,
            'license_number' => $request->license_number,
            'weight' => $request->weight,
            'registration_year' => $request->registration_year,
        ]);

        return redirect()->route('cars.all');
    }

    public function addCarInfo()
    {
        return view('add-car');
    }

    public function editCar(Request $request, $id)
    {
        $car = Car::where('id', $id)->first();

        return view('edit-car')->with('car', $car);
    }

    public function updateCar(Request $request, $id)
    {
        $car = Car::where('id', $id)->first();

        $car->name = $request->name;
        $car->make = $request->make;
        $car->model = $request->model;
        $car->license_number = $request->license_number;
        $car->weight = $request->weight;
        $car->registration_year = $request->registration_year;

        $car->save();

        return redirect()->route('cars.all');
    }

    public function deleteCar(Request $request)
    {
        Car::where('id', $request->car_id)->delete();

        return redirect()->route('cars.all');
    }
}

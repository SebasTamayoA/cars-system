<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Models\Car;
use COM;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //var_dump(car::all());die;
        //return car::all();
        $filterColumn = $request->input('filterColumn');
        $filterValue = $request->input('filterValue');

        $query = Car::query();

        if ($filterColumn && $filterValue) {
            $query->where($filterColumn, 'like', '%' . $filterValue . '%');
        }

        $cars = $query->get();

        return view('cars.index', [
            'cars' => $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create',[

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarRequest $request)
    {
        //var_dump($request->all());die;
        //var_dump($request->car_name);die;
        // $car = new car();
        // $car->name = $request->name;
        // $car->genre = $request->genre;
        // $car->release_date = $request->release_date;
        // $car->description = $request->description;
        // $car->rating = $request->rating;
        // $car->price = $request->price;
        // $car->is_multiplayer = $request->is_multiplayer;
        // $car->platform = $request->platform;
        // $car->save();
        Car::create($request->all());
        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //$car = car::findOrFail($id);
        return view('cars.show', [
            'car' => $car
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //$car = car::findOrFail($id);
        //var_dump($car);die;
        return view('cars.edit', [
            'car' => $car
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarRequest $request, Car $car)
    {
        // $car->name = $request->name;
        // $car->genre = $request->genre;
        // $car->release_date = $request->release_date;
        // $car->description = $request->description;
        // $car->rating = $request->rating;
        // $car->price = $request->price;
        // $car->is_multiplayer = $request->is_multiplayer;
        // $car->platform = $request->platform;
        // $car->update();

        $car->update($request->all());

        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect('/cars');
    }
}

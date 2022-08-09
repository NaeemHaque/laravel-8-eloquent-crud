<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    //* use "php artisan make:controller ControllersName --resource" for craete a controller with crud actions methods
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        // var_dump(json_decode($cars->toJson()));
        // $cars = Car::where('name', '=', 'Audi')->get();

        // Car::chunk(2, function($cars) {
        //     foreach ($cars as $car) {
        //         echo $car. '<br>';
        //     }
        // });
        return view('cars.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // First way to store data in database
        // $car = new Car;
        // $car->name = $request->name;
        // $car->founded = $request->founded;
        // $car->description = $request->description;
        // $car->save();

        //another preferred way to store data in database
        // $car = Car::create([
        //     'name' => $request->name,
        //     'founded' => $request->founded,
        //     'description' => $request->description
        // ]);

        // Third preferred way to store data in database
        $car = Car::create($request->all());
        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        return view('cars.edit')->with('car', $car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $car = Car::where('id', $id)->update([
            'name' => $request->name,
            'founded' => $request->founded,
            'description' => $request->description
        ]);
        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect('/cars');
    }
}

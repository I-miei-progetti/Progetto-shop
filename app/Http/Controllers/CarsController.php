<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Http\Requests\UpdateCarRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;


class CarsController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            // con 'auth' prende in consoderazione tutte le funzioni che ci sono dentro il controller ma noi vogliamo che la index la vedano tutti quindi mettiamo solo la create e la store
            // 'auth',
            new Middleware('auth', except: ['index'])
        ];
    }



    public function create(){
        return view('car.create');
    }

public function edit(UpdateCarRequest $request, Cars $car){
// dd($request->all(), $car);
$car->brand=$request->brand;
$car->name=$request->name;
$car->year=$request->year;
$car->price=$request->price;
$car->img=$request->has('img')?$request->file('img')->store('cover','public'):$car->img;
$car->save();
return redirect(route('car.show',compact('car')))->with ('message','Insersione modificata con successo!');
}


    public function store(CarRequest $request){
        // dd($request->all());
        Cars::create([
            'brand'=> $request->input('brand'),
            'name'=> $request->input('name'),
            'year'=> $request->input('year'),
            'img'=> $request->file('img')->store('cover','public'),
            'price'=> $request->input('price')
            

        ]);
        return redirect(route('home'))->with('message','La tua Auto è stata caricata correttamente');
    }

    public function index(){
        $cars = Cars::latest()->get();
        return view('car.index',compact('cars'));
    }
    
    public function show(Cars $car){
        return view('car.show',compact('car'));
    }

    public function update(Cars $car){
        return view('car.update', compact('car'));
    }
}

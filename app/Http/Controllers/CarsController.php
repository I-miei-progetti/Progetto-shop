<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
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
        return view('car.update');
    }
}

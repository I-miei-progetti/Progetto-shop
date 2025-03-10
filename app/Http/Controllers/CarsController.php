<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;

class CarsController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('auth', except: ['index']),
           
        ];
    }



    public function create(){
        return view('car.create');
    }

    public function store(Request $request){
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
}

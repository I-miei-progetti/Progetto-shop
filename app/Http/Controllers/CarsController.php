<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{
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
}

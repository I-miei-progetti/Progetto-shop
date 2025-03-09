<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class PubliController extends Controller
{
   public function home (){
    
        $cars=Cars::latest()->take(4)->get();
        // dd($cars->all());
        
        return view('welcome',compact('cars'));

    }

    
}

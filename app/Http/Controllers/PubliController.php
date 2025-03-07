<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PubliController extends Controller
{
   public function home (){
    
        $cars=Cars::latest()->take(4)->get();
        
        return view('welcome',compact('cars'));
    }

    
}

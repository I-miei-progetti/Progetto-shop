<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PubliController extends Controller
{
   public function homepage (){
        return view('welcome');
    }
}

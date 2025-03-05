<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Le nostre auto', function () {
    return view('ourCar');
});

Route::get('/Auto', function () {
    return view('shopCar');
});

// use App\Http\Controllers\PubliController;


// Route::get('/', [PubliController::class,'homepage'])->name('homepage');
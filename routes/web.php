<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\PubliController;

Route::get('/', [PubliController::class,'home'])->name('home');
Route::get('/car/create',[CarsController::class, 'create'])->name('car.create');
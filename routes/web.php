<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\PubliController;

Route::get('/', [PubliController::class,'home'])->name('home');
Route::get('/car/create',[CarsController::class, 'create'])->name('car.create');
Route::post('/car/store',[CarsController::class, 'store'])->name('car.store');
Route::get('/car/all',[CarsController::class, 'index'])->name('car.index');
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\PubliController;

Route::get('/', [PubliController::class,'home'])->name('home');
Route::get('/car/create',[CarsController::class, 'create'])->name('car.create');
Route::get('/car/all',[CarsController::class, 'index'])->name('car.index');
Route::get('/car/show{car}',[CarsController::class, 'show'])->name('car.show');

Route::post('/car/store',[CarsController::class, 'store'])->name('car.store');
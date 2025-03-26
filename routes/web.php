<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\PubliController;
use App\Http\Controllers\ReviewController;

Route::get('/', [PubliController::class,'home'])->name('home');
Route::get('/work/page',[PubliController::class,'work'])->name('work');

Route::get('/user/car',[CarsController::class, 'userCar'])->name('car.user');
Route::get('/car/create',[CarsController::class, 'create'])->name('car.create')->middleware('auth'); //inserisco middleware al fine di negare la vista per aggiungere 
Route::get('/car/all',[CarsController::class, 'index'])->name('car.index');
Route::get('/car/show{car}',[CarsController::class, 'show'])->name('car.show');
Route::get('/car/update{car}',[CarsController::class, 'update'])->name('car.update');
Route::get('/review/index',[ReviewController::class, 'index'])->name('review.index');

Route::post('/work/submit',[PubliController::class,'submit'])->name('work.submit');
Route::post('/review/store',[ReviewController::class, 'store'])->name('review.store');
Route::post('/car/store',[CarsController::class, 'store'])->name('car.store')->middleware('auth');

Route::put('/car/edit/{car}',[CarsController::class,'edit'])->name('car.edit');

Route::delete('/car/delete{car}',[CarsController::class,'destroy'])->name('car.delete');
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\mealController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return ('yeni rota testi');
});

Route::resource('customers', CustomerController::class);
Route::resource('exercises', ExerciseController::class);
Route::resource('activities', ActivityController::class);
Route::resource('foods', FoodController::class);
Route::resource('meals', mealController::class);
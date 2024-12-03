<?php

use App\Http\Controllers\ExercisesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('exercises', ExercisesController::class);
Route::resource('users', UserController::class);

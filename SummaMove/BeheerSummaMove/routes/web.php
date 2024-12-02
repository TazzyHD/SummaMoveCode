<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OefeningController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [OefeningController::class, 'index'])->name('oefeningen.index');
Route::get('/create', [OefeningController::class, 'create'])->name('oefeningen.create');
Route::post('/store', [OefeningController::class, 'store'])->name('oefeningen.store');
Route::get('/show/{id}', [OefeningController::class, 'show'])->name('oefeningen.show');
Route::get('/edit/{id}', [OefeningController::class, 'edit'])->name('oefeningen.edit');
Route::put('/update/{id}', [OefeningController::class, 'update'])->name('oefeningen.update');
Route::delete('/destroy/{id}', [OefeningController::class, 'destroy'])->name('oefeningen.destroy');

Route::resource('users', UserController::class);

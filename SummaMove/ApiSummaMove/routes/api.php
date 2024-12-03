<?php

use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\Exercises_userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;




Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('exercises', ExerciseController::class)
    ->parameters(['exercises' => 'exercise'])->only(['index', 'show']);

Route::post('/register', [AuthenticationController::class, 'register']);
Route::post('/login', [AuthenticationController::class, 'login'])->name('login');
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::apiResource('exercises', ExerciseController::class)->except(['index', 'show']);
    Route::apiResource('exercises_user', Exercises_userController::class)
        ->parameters(['exercises_user' => 'exercises_user']); //->only(['index', 'show'])
    Route::post('/logout', [AuthenticationController::class, 'logout']);
});
Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found'], 404);
});

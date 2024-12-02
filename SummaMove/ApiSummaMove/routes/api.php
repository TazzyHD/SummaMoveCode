<?php

use App\Http\Controllers\User_oefeningenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\OefeningController;




Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('oefeningen', OefeningController::class)
    ->parameters(['oefeningen' => 'oefening'])->only(['index', 'show']);

Route::post('/register', [AuthenticationController::class, 'register']);
Route::post('/login', [AuthenticationController::class, 'login'])->name('login');
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::apiResource('oefeningen', OefeningController::class)->except(['index', 'show']);
    Route::apiResource('user_oefeningen', User_oefeningenController::class)
        ->parameters(['user_oefeningen' => 'user_oefening']); //->only(['index', 'show'])
    Route::post('/logout', [AuthenticationController::class, 'logout']);
});
Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found'], 404);
});

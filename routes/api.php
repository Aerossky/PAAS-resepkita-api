<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/tes', function () {
    return 'Hello World';
});


Route::resource('/resep', RecipeController::class);


Route::fallback(function () {
    return response()->json([
        'message' => 'Endpoint not found. Please check the URL.'
    ], 404);
});

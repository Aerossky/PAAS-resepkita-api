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

Route::get('/recipes/name/{name}', [RecipeController::class, 'getByName']);
Route::get('/recipes/ingredient/{name}', [RecipeController::class, 'getByIngredients']);
Route::resource('/recipes', RecipeController::class);


<?php

use App\Http\Controllers\AdminRecipeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IngredientController;

Route::get('/', function () {
    return view('welcome');
});

// Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

//register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard
Route::resource('/dashboard', DashboardController::class);

// Admin Dashboard
Route::resource('user', UserController::class);
Route::resource('ingredient', IngredientController::class);
Route::resource('recipe', AdminRecipeController::class);

Route::get('/admin-dashboard',[AuthController::class, 'indexAdmin'])->name('admin.dashboard');

Route::get('/admin-ingredient', function () {
    return view('admin.ingredient.ingredient');
});



<?php

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
Route::get('/test', [AuthController::class, 'test'])->name('test');

//register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard
Route::resource('/dashboard', DashboardController::class);

// Admin Dashboard
Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin-user', function () {
    return view('admin.user.user');
});

Route::resource('user', UserController::class);

Route::get('/admin-ingredient', function () {
    return view('admin.ingredient.ingredient');
});

Route::resource('ingredient', IngredientController::class);



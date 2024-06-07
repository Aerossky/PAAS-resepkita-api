<?php

use App\Http\Controllers\AdminRecipeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IngredientController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('/', [DashboardController::class, 'index']);

Route::get('/tentang', function () {
    return view('about');
});

Route::get('/dokumentasi', function () {
    return view('documentation');
})->middleware('auth');

// Login
// middleware group
Route::group(['middleware' => 'isLogin'], function () {

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/test', [AuthController::class, 'test'])->name('test');

    //register
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});
// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Admin Dashboard
Route::group(['middleware' => 'isAdmin'], function () {
    Route::resource('user', UserController::class);
    Route::resource('ingredient', IngredientController::class);
    Route::resource('recipe', AdminRecipeController::class);

    Route::get('/admin-dashboard', [AuthController::class, 'indexAdmin'])->name('admin.dashboard');

    Route::get('/admin-ingredient', function () {
        return view('admin.ingredient.ingredient');
    });

    Route::resource('ingredient', IngredientController::class);
});

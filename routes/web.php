<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/registration', [RegisterController::class, 'registerForm'])->middleware('guest');
Route::post('/registration', [RegisterController::class, 'registerUser'])->middleware('guest');


Route::get('/login', [LoginController::class, 'loginForm']);
Route::post('/dashboard', [LoginController::class, 'loginUser']);


// temporary route for admin //

Route::get('/admin', [AdminController::class, 'seeAll']);

// temporary route for admin //
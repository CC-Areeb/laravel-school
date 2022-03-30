<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/newsletter', function () {
    return view('news');
});

Route::get('/registration', [RegisterController::class, 'registerForm'])->middleware('guest');
Route::post('/registration', [RegisterController::class, 'registerUser'])->middleware('guest');
Route::get('/get-subjects', [RegisterController::class, 'getSubjects'])->middleware('guest');
Route::post('/insert-subjects', [RegisterController::class, 'registerUser']);

// login //
Route::get('/login', [LoginController::class, 'loginForm'])->name('login');
Route::post('/dahsboard', [LoginController::class, 'authenticate']);
// login //


// logout //
Route::post('logout', [LogoutController::class, 'logout'])->middleware('auth');
// logout //


// temporary route for admin //
Route::get('/admin', [AdminController::class, 'seeAll']);

Route::get('/update/{id}', [AdminController::class, 'updateUserBtn']);
Route::post('/update', [AdminController::class, 'updateInfo']);

Route::get('/delete/{id}', [AdminController::class, 'deleteUser']);

// temporary route for admin //




// routes for teacher //
Route::get('/teacher', [TeacherController::class, 'showStudents']);
Route::post('/present', [TeacherController::class, 'status'])->name('status');
// routes for teacher //




// student routes //
Route::get('/student', [StudentController::class, 'seeData']);
// student routes //
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


Route::get('/delete_attendance/{id}', [TeacherController::class, 'attendance_delete'])->name('delete_attendance');
Route::get('/update_attendance', [TeacherController::class, 'attendance_update'])->name('update_attendance');


Route::get('/edit', [TeacherController::class, 'edit_page'])->name('edit');
Route::get('/deleteAttendance/{register_id}', [TeacherController::class, 'deleteFunction'])->name('deleteAttendance');

Route::get('/restoreAttendance', [TeacherController::class, 'restoreFunction'])->name('restoreAttendance');

Route::get('/updateAttendance/{register_id}', [TeacherController::class, 'showSingleData'])->name('updateAttendance');
Route::post('/updateAttendance', [[TeacherController::class, 'updateFunction']]);
// routes for teacher //





// student routes //
Route::get('/student', [StudentController::class, 'seeData']);
// student routes //
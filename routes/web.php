<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use RealRashid\SweetAlert\Facades\Alert;
use function PHPUnit\Framework\returnSelf;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register', [Register::class, 'Display']);
Route::post('/register', [Register::class, 'SignUp']);


Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'process']);
// Route::post('/login', [Login::class, 'authenticate']);

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::get('/', [HomeController::class, 'home']);
Route::get('/home', [HomeController::class, 'home']);


Route::get('/about', [AboutUsController::class, 'about']);

Route::get('/forum', [ForumController::class, 'check']);
Route::post('/forum', [ForumController::class, 'mail'])->name('forum');

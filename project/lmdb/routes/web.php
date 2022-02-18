<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/', [MoviesController::class, 'index']);

Route::get('/movies', [MoviesController::class, 'allMovies']);
Route::get('/movie/{title}', [MoviesController::class, 'showMovie']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('/admindashboard', [CustomAuthController::class, 'admindashboard'])->name('admin')->middleware('admin');
Route::get('/userdashboard', [CustomAuthController::class, 'userdashboard'])->name('user')->middleware('user');

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Auth::routes();
Route::get('/admindashboard', [AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/userdashboard', [UserController::class, 'index'])->name('user')->middleware('user');


//  Genrepage routes
Route::get('genre',  function () {
    return view('genre');
});

Route::get('genre', [MoviesController::class, 'genreMovies']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

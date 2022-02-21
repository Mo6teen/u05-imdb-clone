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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Movies routes
Route::get('/', [MoviesController::class, 'index']);
Route::get('/movies', [MoviesController::class, 'allMovies']);
Route::get('/', [MoviesController::class, 'index']);
Route::get('/movie/{title}', [MoviesController::class, 'showMovie']);

// Dashboard routes
Auth::routes();
Route::get('admindashboard', [CustomAuthController::class, 'admindashboard'])->name('admin')->middleware('admin');
Route::get('userdashboard', [CustomAuthController::class, 'userdashboard'])->name('user')->middleware('user');

Auth::routes();
Route::get('admindashboard', [AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('userdashboard', [UserController::class, 'index'])->name('user')->middleware('user');

// Login, registration, signout routes
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

//  Genrepage routes
Route::get('genre',  function () {
    return view('genre');
});
Route::get('genre', [MoviesController::class, 'genreMovies']);

// Ratings routes
Route::get('/top-movies',  function () {
    return view('top-movies');
});
Route::get('/top-movies', [MoviesController::class, 'showTopMovies']);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Review-form route
Route::post('review-form', [ReviewsController::class, 'store'])->name('review.store');
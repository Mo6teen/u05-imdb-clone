<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewsController;

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

// Review route
Route::post('reviews-form', [ReviewsController::class, 'store'])->name('reviews.store');

// Search route
Route::post('search-movies', [MoviesController::class, 'search']);

// Login, registration, signout routes
Auth::routes();
Route::get('admindashboard', [CustomAuthController::class, 'admindashboard'])->name('admin')->middleware('admin');
Route::get('userdashboard', [CustomAuthController::class, 'userdashboard'])->name('user')->middleware('user');

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// Password routes
Route::get('forgetPassword', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forgetPassword', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('resetPassword/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('resetPassword', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

// Dashboard routes
Auth::routes();
Route::get('admindashboard', [AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('userdashboard', [UserController::class, 'index'])->name('user')->middleware('user');

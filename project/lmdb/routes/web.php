<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WatchlistController;
use Illuminate\Support\Facades\Artisan;

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
Route::get('/', [MovieController::class, 'index']);
Route::get('/movie/{title}', [MovieController::class, 'showMovie']);


//  Genrepage routes
Route::get('genre',  function () {
    return view('genre');
});
Route::get('genre', [MovieController::class, 'genreMovies']);
Route::get('genre/{genre}', [GenreController::class, 'showGenre']);
Route::get('genres', [GenreController::class, 'getMovieGenre']);

// Ratings routes
Route::get('/top-movies',  function () {
    return view('top-movies');
});
Route::get('/top-movies', [MovieController::class, 'showTopMovies']);

// Review routes
Route::post('reviews-form', [ReviewController::class, 'store'])->name('reviews.store')->middleware('auth');
Route::get('/movie/delete/{id}', [ReviewController::class, 'delete']);
Route::get('movie/', [UserController::class, 'show'])->name('user')->middleware('user');

// Search route
Route::post('search-movies', [MovieController::class, 'search']);

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
Route::get('admindashboard', [AdminController::class, 'show'])->name('admin')->middleware('admin');
Route::get('edit-user/{id}', [AdminController::class, 'edit'])->name('admin')->middleware('admin');
Route::put('update-user/{id}', [AdminController::class, 'update'])->name('admin')->middleware('admin');
Route::get('/admindashboard/delete/{id}', [AdminController::class, 'delete'])->name('admin')->middleware('admin');
Route::post('save', [MovieController::class, 'createMovie']);
Route::get('admindashboard', [AdminController::class, 'show']);
Route::get('userdashboard', [UserController::class, 'index'])->name('user')->middleware('user');

// Watchlist Routes
Route::get('userdashboard', [WatchlistController::class, 'show']);
Route::post('store-form', [WatchlistController::class, 'store'])->name('watchlists.store')->middleware('auth');

<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HandleUsersController;
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
Route::get('movie/', [ReviewController::class, 'show']);


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

Auth::routes();
Route::get('admindashboard', [AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('userdashboard', [UserController::class, 'index'])->name('user')->middleware('user');

// Dashboard routes
Auth::routes();
Route::get('handle-users', [HandleUsersController::class, 'show'])->name('handle-users')->middleware('auth');
Route::get('edit-user/{id}', [HandleUsersController::class, 'edit'])->middleware('auth');
Route::put('update-user/{id}', [HandleUsersController::class, 'update'])->middleware('auth');
Route::get('handleusers/delete/{id}', [HandleUsersController::class, 'delete'])->middleware('auth');
Route::get('createmovie', function (){
    if (Auth::user()->role == 0 ){
        return view('createmovie');
    }
});
Route::post('save', [MovieController::class, 'createMovie'])->middleware('auth');

// Watchlist Routes
Auth::routes();
Route::get('mywatchlist', [WatchlistController::class, 'show'])->name('watchlist.watch')->middleware('auth');
Route::post('store-form', [WatchlistController::class, 'store'])->name('watchlists.store')->middleware('auth');
Route::get('mywatchlist/delete/{id}', [WatchlistController::class, 'delete'])->name('watchlist.delete')->middleware('auth');

// Other Lists Routes

// User Settings Routes




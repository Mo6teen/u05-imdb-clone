<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    //CRUD
    public function allMovies() {
        $movies = Movies::get();
        return view('movies', ['movies'=>$movies]);
    }
}

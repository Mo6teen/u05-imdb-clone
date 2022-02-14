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

    public function showMovie($title) {
        if (Movies::where('title', $title)->exists()) {
            /* return view('movie')->with('title', $title); */
            $movie = Movies::where('title', $title)->first();

            return view('movie', ['movie' => $movie]);
        }
    }
}

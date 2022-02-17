<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    //CRUD

    //Gett all movies to show in /movies
    public function allMovies()
    {
        $movies = Movies::get();
        return view('movies', ['movies' => $movies]);
    }

    //Gett all movies to show in homepage.
    public function introMovies()
    {
        $movies = Movies::get();
        return view('homepage', ['movies' => $movies]);
    }

    //Gett all movies to show in genrepage.
    public function genreMovies()
    {
        $movies = Movies::get();
        return view('genre', ['movies' => $movies]);
    }
}

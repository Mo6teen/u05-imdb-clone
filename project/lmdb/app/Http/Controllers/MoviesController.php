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
    // public function introMovies()
    // {
    //     $movies = Movies::get();
    //     return view('homepage', ['movies' => $movies]);
    // }

    public function index()
    {
        $Movies = Movies::orderby('rating', 'DESC')->take(3)->get();
        return view('homepage', compact('Movies'));
    }

    //Gett all movies to show in genrepage.
    public function genreMovies()
    {
        $movies = Movies::get();
        return view('genre', ['movies' => $movies]);
    }

    public function showMovie($title)
    {
        if (Movies::where('title', $title)->exists()) {
            $movie = Movies::where('title', $title)->first();

            return view('movie', ['movie' => $movie]);
        }
    }

    // Get all the top 5 movies with the highest rating.
    public function showTopMovies()
    {
        $movies = Movies::orderby('rating', 'DESC')->take(6)->get();
        return view('top-movies', compact('movies'));
    }

    // function for search movie

    public function search(Request $request)
    {
        if ($request->isMethod('POST')) {
            $title = $request->get('title');
            $data = Movies::where('title', 'LIKE', '%' . $title . '%')->paginate(1);
        }
        return redirect('movie/' . $title);
    }
}

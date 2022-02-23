<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //CRUD

    //Gett all movies to show in /movies
    public function allMovies()
    {
        $movies = Movie::get();
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
        $Movies = Movie::orderby('rating', 'DESC')->take(3)->get();
        return view('homepage', compact('Movies'));
    }

    //Gett all movies to show in genrepage.
    public function genreMovies()
    {
        $movies = Movie::get();
        return view('genre', ['movies' => $movies]);
    }

    public function showMovie($title)
    {
        if (Movie::where('title', $title)->exists()) {
            $movie = Movie::where('title', $title)->first();

            return view('movie', ['movie' => $movie]);
        }
    }

    // Get all the top 5 movies with the highest rating.
    public function showTopMovies()
    {
        $movies = Movie::orderby('rating', 'DESC')->take(6)->get();
        return view('top-movies', compact('movies'));
    }

    // function for search movie

    public function search(Request $request)
    {
        if ($request->isMethod('POST')) {
            $title = $request->get('title');
            $data = Movie::where('title', 'LIKES', '%' . $title . '%')->paginate(5);
        }
        return redirect('movie/' . $title);
    }
}

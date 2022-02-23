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

    public function createMovie(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
            'release-date' => 'required|min:2022-02-23',
            'rating' => 'required|min:1 max:5',
            'image_path' => 'required'
        ]);

        $input = $request->all();
        if ($request->hasFile('image_path')) {
            $destination_path = 'public/images/movie-thumbnail';
            $image = $request->file('image_path');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image_path')->storeAs($destination_path, $image_name);

            $input['image_path'] = $image_name;
        }

        Movie::create($input);
        session()->flash('message', $input['title'] . ' succesfully saved');

        return redirect('/admindashboard');
    }
}

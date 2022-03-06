<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class GenreController extends Controller
{

    public function getMovieGenre()
    {
        $genreThriller = Movie::select()->where('genre', 'thriller')->take(3)->orderby('id', 'DESC')->get();
        $genreFantasy = Movie::select()->where('genre', 'fantasy')->take(3)->orderby('id', 'DESC')->get();
        $genreDrama = Movie::select()->where('genre', 'drama')->take(3)->orderby('id', 'DESC')->get();
        $genreComedy = Movie::select()->where('genre', 'comedy')->take(3)->orderby('id', 'DESC')->get();
        $genreAction = Movie::select()->where('genre', 'action')->take(3)->orderby('id', 'DESC')->get();
        $genreRomance = Movie::select()->where('genre', 'romance')->take(3)->orderby('id', 'DESC')->get();
        return view('genres', [
            'genreThriller' => $genreThriller,
            'genreDrama' => $genreDrama,
            'genreFantasy' => $genreFantasy,
            'genreComedy' => $genreComedy,
            'genreAction' => $genreAction,
            'genreRomance' => $genreRomance,
        ]);
    }

    public function showGenre($genre)
    {
        $genre = Movie::where('genre', $genre)->get();

        return view('genre', ['genre' => $genre]);
    }
};

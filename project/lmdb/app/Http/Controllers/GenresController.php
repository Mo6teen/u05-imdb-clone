<?php

namespace App\Http\Controllers;
use App\Models\Movies;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    /* public function showGenre($genre) 
    {
        return $genre;

    } */
    public function getMovieGenre() 
    {
        $genreThriller = Movies::select()->where('genre', 'thriller')->take(3)->orderby('id', 'DESC')->get();
        $genreFantasy = Movies::select()->where('genre', 'fantasy')->take(3)->orderby('id', 'DESC')->get();
        $genreDrama = Movies::select()->where('genre', 'drama')->take(3)->orderby('id', 'DESC')->get();
        return view('genres', [
            'genreThriller' => $genreThriller,
            'genreDrama' => $genreDrama,
            'genreFantasy' => $genreFantasy
        ]); 
    }

    public function showGenre($genre)
    {
            $genre = Movies::where('genre', $genre)->get();

            return view('genre', ['genre' => $genre]); 
    }
    
};

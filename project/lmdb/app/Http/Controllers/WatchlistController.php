<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Movie;
use App\Models\UserMovie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WatchlistController extends Controller
{
    public function addToWatchlist($movieId){
        UserMovie::create([
            'user_id' => Auth::user()->id,
            'movie_id' => $movieId, 
        ]);
        return redirect()->back();
    }

    public function seeWatchlist(){
        $userid = Auth::user()->id;
        $movie = Movie::find($userid);
        $watchlist = DB::table('user_movies', $movie)->where('user_id', $userid)->get();
        return view('userdashboard', $userid, $movie, $watchlist);
    }
}

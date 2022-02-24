<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Watchlist;
use Illuminate\Support\Facades\Auth;

class WatchlistController extends Controller
{
    public function addToWatchlist($id){
        if (Auth::user()->role == 1){
            $addMovieToWatchlist = Watchlist::create([
                'user_id' => Auth::user()->id,
                'movie_id' => $id,
            ]);
            return redirect()->back();
        }
    }
}

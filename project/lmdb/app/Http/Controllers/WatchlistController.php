<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Watchlist;
use Illuminate\Support\Facades\Auth;


class WatchlistController extends Controller
{
    // Add movie to watchlist if it does not already exist

    public function store(Request $request)
    {
        $movie = $request->movie_id;
        $user = Auth::user()->id;

        if (Watchlist::where('user_id', $user)->where('movie_id', $movie)->first()) {
            return back()->with('error', 'This movie is already in your watchlist');
        } else {
            $input = $request->all();
            $request->validate([
                'user_id' => 'required',
                'movie_id' => 'required'
            ]);

            Watchlist::create($input);
            return back()->with('status', 'This movie has been added to your watchlist');
        }
    }

    public function show()
    {
        $id = Auth::user()->id;
        $watchlists = Watchlist::where('user_id', $id)->get();
        if (Auth::user()) {
            return view('mywatchlist', [
                'watchlists' => $watchlists
            ]);
        } else return back();
    }

    // delete a movie from watchlist

    public function delete($id)
    {
        $data = Watchlist::find($id);
        $data->delete();

        return back();
    }
}

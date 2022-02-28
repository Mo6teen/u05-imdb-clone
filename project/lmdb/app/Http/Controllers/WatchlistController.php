<?php

namespace App\Http\Controllers;

use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WatchlistController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'user_id' => 'required',
            'movie_id' => 'required'
        ]);

        Watchlist::create($input);
        return back();
    }

    public function show()
    {
        $id = Auth::user()->id;
        $watchlists = Watchlist::where('user_id', $id)->get();
        return view('watchlist', [
            'watchlists' => $watchlists
        ]);
    }
}

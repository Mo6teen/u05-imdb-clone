<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Watchlist;
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
        if (Auth::user()){
        return view('mywatchlist', [
            'watchlists' => $watchlists
        ]);
        }
        else return back();
    }
    
    public function delete($id) {
        $data = Watchlist::find($id);
        $data->delete();

        return back();    
    }
}

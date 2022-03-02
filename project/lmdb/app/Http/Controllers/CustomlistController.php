<?php

namespace App\Http\Controllers;

use App\Models\Customlist;
use App\Models\Listentry;
use App\Models\Movie;
use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomlistController extends Controller
{
    // Gets user id and shows users existing lists.

    public function index()
    {

        $id = Auth::user()->id;
        $customLists = Customlist::where('user_id', $id)->get();

        if (Auth::user()) {
            return view('customlists', [
                'customLists' => $customLists
            ]);
        } else return back();
    }

    //Creates new list. 

    public function storeList(Request $request)
    {

        $input = $request->all();
        $request->validate([
            'user_id' => 'required',
            'list_name' => 'required'
        ]);

        Customlist::create($input);
        return back();
    }

    // Update listname.

    public function updateList(Request $request, $id)
    {
        $customList = Customlist::find($id);
        $customList->list_name = $request->input('list_name');
        $customList->update();

        return back()->with('status', 'List has been updated!');
    }

    public function addList(Request $request)
    {
        $request->validate([
            'movie_id' => 'required',
            'customlist_id' => 'required'
        ]);

        $addMovie = new Listentry();
        $addMovie->customlist_id = $request->customlist_id;

        if ($request->movie_id) {
            $movieTitle = $request->movie_id;
            $movie = Movie::where('title', $movieTitle)->value('id');
            $addMovie->movie_id = $movie;
        } else {
            return back()->with('status', 'There is no movie called');
        }

        $addMovie->save();

        return back()->with('status', 'Movie has been added!');
    }

    // Reads from list.

    public function show()
    {
        $id = Auth::user()->id;
        $customLists = Customlist::where('user_id', $id)->get();
        if (Auth::user()) {
            return view('customlist', [
                'customLists' => $customLists
            ]);
        } else {
            return back();
        }
    }
}

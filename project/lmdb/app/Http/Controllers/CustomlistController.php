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

        $addMovie = new Listentry();
        $addMovie->customlist_id = $request->customlist_id;

        if ($request->movie_id) {
            $movieTitle = $request->movie_id;
            $movie = Movie::where('title', $movieTitle)->value('id');
            $addMovie->movie_id = $movie;

            if (!$movie) {
                return back()->with('status', 'This movie does not exist');
            }
        }

        $addMovie->save();
        if (Auth::user()) {
            return back()->with('status', 'Movie has been added to your list!');
        }
    }

    // Reads from list.

    public function show($list_name)
    {
        $id = Auth::user()->id;
        $customList = Customlist::where('list_name', $list_name)->first();

        $mid = Customlist::where('list_name', $list_name)->value('id');
        $Movies = Listentry::select()->where('customlist_id', $mid)->get();

        if (Auth::user()) {
            return view('customlist', [
                'Movies' => $Movies,
                'customList' => $customList,

            ]);
        } else {
            return back();
        }
    }

    public function delete($id)
    {
        $data = Listentry::find($id);
        $data->delete();

        return back();
    }
}

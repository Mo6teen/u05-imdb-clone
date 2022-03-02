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

        if (Auth::user()){
        return view('customlists', [
            'customLists' => $customLists
        ]);
        }
        else return back();

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

    public function addList(Request $request, $id)
    {
        if ($request->input('movie_id')) {

            $movie = $request->input('movie_id');
            $movieId = Movie::where('title', $movie)->get('id'); 
        
        }

        if (Listentry::where('customlist_id', $id)->exists())
        {

        }        
    }

    // Reads from list.

    public function show() 
    { 
        // $id = Auth::user()->id;
        // $customLists = Customlist::where('user_id', $id)->get();
        // if (Auth::user()){
        // return view('customlist', [
        //     'customLists' => $customLists
        // ]);
        // }
        // else return back(); 
    }
}


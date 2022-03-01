<?php

namespace App\Http\Controllers;

use App\Models\Customlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomlistController extends Controller
{
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

    public function store(Request $request) 
    {

        $input = $request->all();
        $request->validate([
            'user_id' => 'required',
            'list_name' => 'required'
        ]);

        Customlist::create($input);
        return back();
    }
}

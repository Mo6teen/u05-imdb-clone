<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request) {
        $input = $request->all();
        $request->validate([
            'name' => 'required',
            'movie_id' => 'required',
            'review'=>'required',
        ]);
        Review::create($input);
        return back();
    }

    public function show() {
        return view('movie');
    }

    public function delete($id) {
        $data = Review::find($id);
        $data->delete();

        return back();    
    }
}

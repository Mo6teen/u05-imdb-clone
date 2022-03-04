<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
        return back()->with('message', 'Your review is awaiting approval. It will be visible once it has been approved.');
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

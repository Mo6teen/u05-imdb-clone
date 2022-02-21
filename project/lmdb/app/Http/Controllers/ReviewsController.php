<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function store(Request $request) {
        $input = $request->all();
        $request->validate([
            'name' => 'required',
            'movies_id' => 'required',
            'review'=>'required',
        ]);
        Reviews::create($input);
        return back();
    }

    /* public function show() {
        $reviews = Reviews::get();
        return view('movie', ['reviews' => $reviews]);
    }   */
}

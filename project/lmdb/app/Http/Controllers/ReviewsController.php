<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function store(Request $request) {
        $input = $request->all();
        $request->validate([
            'movie_id' => 'required',
            'name' => 'required',
            'review'=>'required',
        ]);
        Reviews::create($input);
        return back();
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HandleUsersController extends Controller
{   
    public function show() {
        $users = User::all()->sortBy('name');
        return view('handleusers', ['users' => $users]);
    }

    public function edit($id) {
        $user = User::find($id);
        return view('edit-user', compact('user'));
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->created_at = $request->input('created_at');
        $user->role = $request->input('role');
        $user->update();
        return redirect('handle-users')->with('status', 'The user has been updated!');
    }

    public function delete($id) {
        $data = User::find($id);
        $data->delete();

        return back();    
    } 
}

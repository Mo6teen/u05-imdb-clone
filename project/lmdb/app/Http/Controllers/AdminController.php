<?php
namespace App\Http\Controllers;
use App\Http\Controllers\CustomAuthController;
use App\Models\User;
use CreateUsersTable;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admindashboard');
    }

    public function show() {
        $users = User::all()->sortBy('name');
        return view('admindashboard', ['users' => $users]);
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
        return redirect('/admindashboard')->with('status', 'The user has been updated!');
    }
}

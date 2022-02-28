<?php
namespace App\Http\Controllers;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admindashboard');
    }

    public function show() {
        $users = User::all()->sortBy('name');
        if (auth::user()->role == 0){
        return view('handleusers', ['users' => $users]);
        }
        else return back();
    }

    public function edit($id) {
        $user = User::find($id);
        if (auth::user()->role == 0){
        return view('edit-user', compact('user'));
        }
        else return back();
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->created_at = $request->input('created_at');
        $user->role = $request->input('role');
        $user->update();
        if (auth::user()->role == 0){
        return redirect('handle-users')->with('status', 'The user has been updated!');
        } 
        else return back();
    }

    public function delete($id) {
        $data = User::find($id);
        $data->delete();

        return back();    
    }
}

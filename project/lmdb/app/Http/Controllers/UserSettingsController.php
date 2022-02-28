<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Validation\Rule;

class UserSettingsController extends Controller
{

public function show()
{
	return view('usersettings', ['user' => Auth::user()]);
}


public function editEmail() {
    $user = Auth::user();
    if (auth::user()->role == 1){
    return view('edit-email', compact('user'));
    }
    else return back();
}

public function updateEmail(Request $request) {
    $request->validate([
		'email' => ['required', 'email', 'unique:users'],
        'confirm_new_email' => ['required','same:email'],
	]);
    $user = Auth::user();
    $user->email = $request->email;
    $user->email_verified_at = null;
    $user->save();
    if (auth::user()->role == 1){
    return redirect('usersettings')->with('status', 'Your email has been updated!');
    } 
    else return back();
}


}

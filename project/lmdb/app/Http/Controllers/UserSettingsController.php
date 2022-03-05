<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserSettingsController extends Controller
{

    public function show()
    {
        return view('usersettings', ['user' => Auth::user()]);
    }


    public function editEmail()
    {
        $user = Auth::user();
        if (Auth::user()) {
            return view('edit-email', compact('user'));
        } else return back();
    }

    // let user change email with confirmation

    public function updateEmail(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:users'],
            'confirm_new_email' => ['required', 'same:email'],
        ]);
        $user = Auth::user();
        $user->email = $request->email;
        $user->email_verified_at = null;
        $user->save();
        if (Auth::user()) {
            return redirect('usersettings')->with('status', 'Your email has been updated!');
        } else return back();
    }

    public function editPassword()
    {
        $user = Auth::user();
        if (Auth::user()) {
            return view('edit-password', compact('user'));
        } else return back();
    }

    // let user change password, validate the old and confirm the new password 

    public function updatePassword(Request $request)
    {
        $user = Auth::user();
        $userPassword = $user->password;

        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'same:confirm_password', 'min:6'],
            'confirm_password' => ['required'],

        ]);

        if (!Hash::check($request->current_password, $userPassword)) {
            return back()->withErrors(['current_password' => 'Password does not match current password']);
        }
        $user->password = Hash::make($request->password);
        $user->save();
        if (Auth::user()) {
            return redirect('usersettings')->with('status', 'Your password has been updated!');
        } else return back();
    }
}

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
}

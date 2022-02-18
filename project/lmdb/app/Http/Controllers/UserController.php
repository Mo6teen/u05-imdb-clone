<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CustomAuthController;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('userdashboard');
    }
}

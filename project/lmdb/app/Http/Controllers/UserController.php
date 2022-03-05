<?php

namespace App\Http\Controllers;


class UserController extends Controller
{
    // if user middleware approves
    
    public function index()
    {
        return view('userdashboard');
    }

}

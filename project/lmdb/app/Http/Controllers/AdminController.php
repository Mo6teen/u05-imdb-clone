<?php
namespace App\Http\Controllers;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admindashboard');
    }
}

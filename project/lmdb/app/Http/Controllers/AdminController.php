<?php
namespace App\Http\Controllers;
use App\Http\Controllers\CustomAuthController;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admindashboard');
    }
}

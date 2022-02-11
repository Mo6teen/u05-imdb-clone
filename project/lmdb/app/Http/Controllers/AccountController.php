<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function allAccounts() {
        $accounts = Account::get();
        return view('accounts', ['accounts'=>$accounts]);
    }
}



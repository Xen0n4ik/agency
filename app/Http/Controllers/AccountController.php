<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//use App\Models\User;

class AccountController extends Controller
{
    public function index()
    {
        return view('pages.account.account');
    }
}

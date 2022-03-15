<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserAgreementController extends Controller
{
    public function index()
    {
        return view('pages.text.user_agreement');
    }
}

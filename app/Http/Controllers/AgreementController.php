<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AgreementController extends Controller
{
    public function index()
    {
        return view('pages.text.agreement');
    }
}

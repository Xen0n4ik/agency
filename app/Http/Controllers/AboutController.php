<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//use App\Models\User;

class AboutController extends Controller
{
    public function index()
    {
        return view('pages.about.about');
    }
}

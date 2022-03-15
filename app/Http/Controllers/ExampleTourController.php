<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//use App\Models\User;

class ExampleTourController extends Controller
{
    public function index()
    {
       return view('pages.example_tour.example_tour');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cities;

//use App\Models\User;

class CitiesController extends Controller
{
    public function index()
    {
        $arr= Cities::print_cities();
        return view('pages.cities.cities', compact('arr'));
    }
}

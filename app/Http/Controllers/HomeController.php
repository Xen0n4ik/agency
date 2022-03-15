<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Carousel;

class HomeController extends Controller
{
    public function index()
    {
        $arr_carousel= Carousel::print_carousel();
        return view('welcome', compact('arr_carousel'));
    }
}

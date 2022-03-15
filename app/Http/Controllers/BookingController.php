<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function index()
    {
        return view('pages.booking.booking');
    }
}

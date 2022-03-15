<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tours;


class ToursController extends Controller
{
    public function index()
    {
        return view('pages.tours.tours');
    }

    public function tours_city_get($ID_CITY)
    {
        $arr_tours= Tours::print_tours($ID_CITY);
        return view('pages.tours.tours', compact('arr_tours'));
    }

    public function tour_get($ID_CITY, $ID_TOUR)
    {
        $arr_tour= Tours::print_example_tour($ID_TOUR);
        $arr_date= Tours::get_date($ID_TOUR);
        $arr_program= Tours::get_prog($ID_TOUR);
        $arr_com= Tours::comments_print($ID_TOUR);
        return view('pages.example_tour.example_tour', compact('arr_tour','arr_date', 'arr_program','arr_com', 'ID_TOUR'));

    }

    public function submit($ID_CITY)
    {
        return "ello";
    }

}

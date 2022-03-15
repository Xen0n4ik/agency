<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class Tours extends Authenticatable
{
    public static function print_tours($ID_CITY): array
    {
        $tours = DB::select('call tours_print(?,?)', array($ID_CITY,0));
        return $tours;
    }

    public static function print_example_tour($ID_TOUR): array
    {
        $example_tour = DB::select('call one_tour_print(?,?)', array(0, $ID_TOUR));
        return $example_tour;
    }

    public static function get_date($ID_TOUR): array
    {
        $date = DB::select('call date_tours(?)', array($ID_TOUR));
        return $date;
    }

    public static function get_prog($ID_TOUR): array
    {
        $program = DB::select('call programm_tour(?)', array($ID_TOUR));
        return $program;
    }

    public static function comments_print($ID_TOUR): array
    {
        $comments = DB::select('call comment_tour_print(?)', array($ID_TOUR));
        return $comments;
    }

}

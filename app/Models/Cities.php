<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class Cities extends Authenticatable
{
    public static function print_cities(): array
    {
        $cities = DB::select('call cities_print(?)', array("1"));

        return $cities;
    }
}

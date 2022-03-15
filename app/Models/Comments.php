<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class Comments extends Authenticatable
{
    public static function comments_serv_print(): array
    {
        $comments = DB::select('call comment_serv_print(?)', array("1"));
        return $comments;
    }

    public static function add_serve($author, $message): array
    {
        $comments = DB::select('call comment_serv_add(?,?)', array($author, $message));
        return $comments;
    }

    public static function add_tour($author, $message, $ID_TOUR): array
    {
        $comments = DB::select('call comment_tour_add(?,?,?)', array($author, $message, $ID_TOUR));
        return $comments;
    }
}

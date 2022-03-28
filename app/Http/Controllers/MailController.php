<?php

namespace App\Http\Controllers;

use App\Http\Helpers\MyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(){
        MyMail::sendMail('ksyu.stepunina.02@mail.ru', 'Бронирование билетов', 'test');
    }
}


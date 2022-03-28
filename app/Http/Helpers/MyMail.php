<?php


namespace App\Http\Helpers;

use Illuminate\Support\Facades\Mail;

class MyMail
{
  public static function sendMail($recipients, $mail_name, $mail_body, $sender = null, $datetime_send = null): bool
  {
    if (!empty($recipients)) {
      Mail::send('mail', ['body'=>$mail_body], function ($message) use ($mail_name, $recipients, $sender) {
        if (empty($sender)) {
          $sender = env('MAIL_USERNAME');
        }
        $message->from($sender, 'Туристическое агенство - Russian TRIP');
        $message->to($recipients, 'Receiver')->subject($mail_name);
        // $m->cc('copy@test.com', '');
      });
    }
    return true;
  }
}

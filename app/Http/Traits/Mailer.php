<?php

namespace App\Http\Traits;

use Config;
use Illuminate\Mail\Message;
use \Mail;

trait Mailer
{
    public static function sendMail($template, $data, $email_to, $subject=NULL, $email_from=NULL){

        $name = env('MAIL_FROM_NAME','All Coins');
        $subject = (!$subject)?'Letter':$subject;
        $email_from = (!$email_from)?env('MAIL_FROM_ADDRESS','allcoins@info.com'):$email_from;

        Mail::send(['html' =>$template, 'text'=>$template], $data, function (Message $message)
            use ($name, $subject, $email_from, $email_to) {
                $message
                    ->from($email_from, $name)
                    ->to($email_to)
                    ->subject($subject);
            });

        $snd_status = (count(Mail::failures()) > 0) ? false : true;
        return $snd_status;

        //TODO::create mail log

    }
}

<?php

namespace App\Services;

use App\Interfaces\MessageSender;

class SMSService implements MessageSender
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function send($message, $output) {
            echo "Your message is sent to : $message : $output";
            return True;
    }
}

<?php

namespace App\Services;

use App\Interfaces\MessageSender;

class EmailService implements MessageSender
{
    /**
     * Create a new class instance.
     */
    public function __construct() 
    {
        
    }

    public function send($message, $output) {
            echo "Email is sent to : $message : $output";
            return True;
    }
}

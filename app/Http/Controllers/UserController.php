<?php

namespace App\Http\Controllers;

use App\Interfaces\MessageSender;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public $emailService;
    // public function __construct(public MessageSender $emailService) {
    //     $this->emailService = $emailService;
    // }

    // public function __construct(public MessageSender $emailService) {
        
    // }

    public function index() {
        // $this->emailService->send('Hello This is Your Message', 'qdkhan05@gmail.com');
        // return 'Hello yyyyyy';

        $emailService = app(MessageSender::class)->get('email');
        $smsService = app(MessageSender::class)->get('sms');

        $emailService->send('Hello This is Your Email Message', 'qdkhan05@gmail.com');
        echo '<br/>';
        $smsService->send('Hello This is Your Text Message', '(+91) 9616279623');

        return true;
    }
}

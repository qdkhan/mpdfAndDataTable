<?php

namespace App\Listeners;

use App\Events\PostPublished;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NotifyAdminAboutPost implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostPublished $event): void
    {
        // $users = User::select('email')->get();

        $emails = ['qdkhan05@gmail.com', 'anuj.sachan@xipetech.in', 'govind.pandey@xipetech.com'];
            foreach($emails as $email) {
                Mail::raw("The new post with title {$event->post->title} has been created", function($message) use($email, $event) {
                    $message->to($email)
                            ->subject($event->post->title);
                });
            }
    }
}

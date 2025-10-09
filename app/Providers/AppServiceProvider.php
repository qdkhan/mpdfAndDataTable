<?php

namespace App\Providers;

use App\Interfaces\MessageSender;
use App\Models\Post;
use App\Observers\PostObserver;
use App\Services\EmailService;
use App\Services\SMSService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // app()->bind(MessageSender::class, EmailService::class);
        // app()->bind(SMSService::class, EmailService::class);

        // app()->bind(MessageSender::class,  ($app) => collect(['email' => app(EmailService::class), 'sms' => app(SMSService::class)]) );

        app()->bind(MessageSender::class, fn($app) =>  collect([
                'sms'   => app(SMSService::class),
                'email' => app(EmailService::class)
            ])
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Post::observe(PostObserver::class);
    }
}

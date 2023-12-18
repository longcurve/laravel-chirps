<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Events\ChirpCreated;
use App\Listeners\SendChirpCreatedNotifications;

class AppServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        ChirpCreated::class => [
            SendChirpCreatedNotifications::class,
        ],
 
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Events\UserRemoteRegistrationCreated;
use App\Listeners\ProcessNewUserRemoteRegistration;
use App\Events\UserRemoteRegistrationStatusChanged;
use App\Listeners\CreateWebhookCallForRegistrationStatusSuccessOrFailed;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string|string>>
     */
    protected $listen = [
        UserRemoteRegistrationCreated::class => [
            ProcessNewUserRemoteRegistration::class,
        ],
        UserRemoteRegistrationStatusChanged::class => [
            CreateWebhookCallForRegistrationStatusSuccessOrFailed::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot()
    {
        //
    }
} 
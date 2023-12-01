<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Broadcast::routes();

        Broadcast::channel('chat.*', function (User $user) {
            return $user;
        });
    }
}

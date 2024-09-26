<?php
declare(strict_types=1);

namespace App\Shared\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void{
        // Client
        $this->app->register(\App\Client\Infrastructure\Providers\ServiceProvider::class);

        // Stats
        $this->app->register(\App\Stats\Infrastructure\Providers\ServiceProvider::class);
    }
}

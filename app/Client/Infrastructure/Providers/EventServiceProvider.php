<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Providers;

use App\Client\Core\Domain\Entity\Client\Events\ClientCreatedEvent;
use App\Client\Core\Domain\Entity\Client\Listeners\ClientCreatedStatsCreateEventListener\ClientCreatedStatsCreateEventListener;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Event::listen(ClientCreatedEvent::class, ClientCreatedStatsCreateEventListener::class);
    }
}

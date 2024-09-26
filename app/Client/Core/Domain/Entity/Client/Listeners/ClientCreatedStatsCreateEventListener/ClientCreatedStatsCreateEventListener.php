<?php

namespace App\Client\Core\Domain\Entity\Client\Listeners\ClientCreatedStatsCreateEventListener;

use App\Client\Core\Domain\Entity\Client\Events\ClientCreatedEvent;
use App\Client\Core\UseCases\CreateStatsCase\CreateStatsCaseContract;
use App\Client\Infrastructure\Service\StatsService\StatsServiceException;

class ClientCreatedStatsCreateEventListener
{
    public function __construct(private CreateStatsCaseContract $createStatsCase)
    {
    }


    /**
     * @param ClientCreatedEvent $event
     * @return void
     * @throws StatsServiceException
     */
    public function handle(ClientCreatedEvent $event): void
    {
        $this->createStatsCase->create($event->client);
    }
}

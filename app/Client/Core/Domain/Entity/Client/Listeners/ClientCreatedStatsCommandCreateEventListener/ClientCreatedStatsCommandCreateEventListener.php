<?php

namespace App\Client\Core\Domain\Entity\Client\Listeners\ClientCreatedStatsCommandCreateEventListener;

use App\Client\Core\Domain\Entity\Client\Events\ClientCreatedEvent;
use App\Client\Core\UseCases\Domain\CreateCommandDomainCase\CreateCommandDomainCaseContract;
use App\Client\Core\UseCases\Domain\CreateStatsDomainCase\CreateStatsDomainCaseContract;
use App\Client\Infrastructure\External\ExternalException;

final readonly class ClientCreatedStatsCommandCreateEventListener
{
    public function __construct(
        private CreateStatsDomainCaseContract $createStatsDomainCase,
        private CreateCommandDomainCaseContract $createCommandDomainCase,
    ) {
    }


    /**
     * @param ClientCreatedEvent $event
     * @return void
     * @throws ExternalException
     */
    public function handle(ClientCreatedEvent $event): void
    {
        $this->createStatsDomainCase->create($event->client);
        $this->createCommandDomainCase->create($event->client);
    }
}

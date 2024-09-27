<?php

namespace App\Client\Core\Domain\Entity\Client\Listeners\ClientCreatedStatsCreateEventListener;

use App\Client\Core\Domain\Entity\Client\Events\ClientCreatedEvent;
use App\Client\Core\UseCases\Domain\CreateStatsDomainCase\CreateStatsDomainCaseContract;
use App\Client\Infrastructure\Database\Repository\ClientRepository\DeleteClientById\DeleteClientById;
use App\Client\Infrastructure\Service\StatsService\StatsServiceException;

final readonly class ClientCreatedStatsCreateEventListener
{
    public function __construct(
        private CreateStatsDomainCaseContract $createStatsDomainCase,
        private DeleteClientById $deleteClientById
    )
    {
    }


    /**
     * @param ClientCreatedEvent $event
     * @return void
     */
    public function handle(ClientCreatedEvent $event): void
    {
        try{
            $this->createStatsDomainCase->create($event->client);
        } catch (StatsServiceException) {
            $this->deleteClientById->deleteClient($event->client->getId());
        }
    }
}

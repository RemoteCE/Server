<?php

namespace App\Client\Core\Domain\Entity\Client\Listeners\ClientCreatedStatsCommandCreateEventListener;

use App\Client\Core\Domain\Entity\Client\Events\ClientCreatedEvent;
use App\Client\Core\UseCases\Domain\CreateCommandDomainCase\CreateCommandDomainCaseContract;
use App\Client\Core\UseCases\Domain\CreateStatsDomainCase\CreateStatsDomainCaseContract;
use App\Client\Core\UseCases\Domain\DeleteClientByIdDomainCase\DeleteClientByIdDomainCaseContract;
use App\Client\Core\UseCases\Domain\DeleteCommandByClientIdDomainCase\DeleteCommandByClientIdDomainCaseContract;
use App\Client\Core\UseCases\Domain\DeleteStatsByClientIdDomainCase\DeleteStatsByClientIdDomainCaseContract;
use App\Client\Infrastructure\Service\ServiceException;

final readonly class ClientCreatedStatsCommandCreateEventListener
{
    public function __construct(
        private CreateStatsDomainCaseContract $createStatsDomainCase,
        private DeleteStatsByClientIdDomainCaseContract $deleteStatsByClientIdDomainCase,
        private CreateCommandDomainCaseContract $createCommandDomainCase,
        private DeleteCommandByClientIdDomainCaseContract $deleteCommandByClientIdDomainCase,
        private DeleteClientByIdDomainCaseContract $deleteClientByIdDomainCase,
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
            $this->createCommandDomainCase->create($event->client);
        } catch (ServiceException) {
            $this->deleteClientByIdDomainCase->delete($event->client);
            $this->deleteStatsByClientIdDomainCase->delete($event->client);
            $this->deleteCommandByClientIdDomainCase->delete($event->client);
        }
    }
}

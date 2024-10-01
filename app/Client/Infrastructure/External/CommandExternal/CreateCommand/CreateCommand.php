<?php

declare(strict_types=1);

namespace App\Client\Infrastructure\External\CommandExternal\CreateCommand;

use App\Client\Core\Domain\Entity\Client\Client;
use App\Command\Application\RequestDTOFactory\CreateCommandRequestDTOFactory\CreateCommandRequestDTOFactoryContract;
use App\Command\Application\Service\CreateCommandService\CreateCommandServiceContract;
use Exception;

final readonly class CreateCommand
{
    public function __construct(
        private CreateCommandServiceContract $createCommandAPI,
        private CreateCommandRequestDTOFactoryContract $createCommandRequestDTOFactory
    ) {
    }

    /**
     * @param Client $client
     * @return void
     * @throws CommandExternalCreateCommandException
     */
    public function createCommand(Client $client): void
    {
        try {
            $this->createCommandAPI->create(
                $this->createCommandRequestDTOFactory->create($client->getId())
            );
        } catch (Exception $e) {
            throw new CommandExternalCreateCommandException($e->getMessage());
        }
    }
}

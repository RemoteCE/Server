<?php

declare(strict_types=1);

namespace App\Client\Infrastructure\External\CommandExternal\DeleteCommandByClientId;

use App\Command\Application\RequestDTOFactory\DeleteCommandByClientIdRequestDTOFactory\DeleteCommandByClientIdRequestDTOFactoryContract;
use App\Command\Application\Service\DeleteCommandByClientIdService\DeleteCommandByClientIdServiceContract;

final readonly class DeleteCommandByClientId
{
    public function __construct(
        private DeleteCommandByClientIdServiceContract $deleteCommandByClientIdAPI,
        private DeleteCommandByClientIdRequestDTOFactoryContract $deleteCommandByClientIdRequestDTOFactory
    ) {
    }

    public function delete(int $clientId): void
    {
        $this->deleteCommandByClientIdAPI->delete(
            $this->deleteCommandByClientIdRequestDTOFactory->create($clientId)
        );
    }
}

<?php

declare(strict_types=1);

namespace App\Client\Infrastructure\External\CommandExternal\CreateCommand;

use App\Client\Core\Domain\Entity\Client\Client;
use App\Command\Presentation\API\CreateCommandAPI\CreateCommandAPI;

final readonly class CreateCommand
{
    public function __construct(
        private CreateCommandAPI $createCommandAPI,
    ) {
    }

    /**
     * @param Client $client
     * @return void
     * @throws CommandExternalCreateCommandException
     */
    public function createCommand(Client $client): void
    {
        $response = $this->createCommandAPI->create(['clientId' => $client->getId()]);
        if (!($response->getData(true)['status'])) {
            throw new CommandExternalCreateCommandException($response->getContent());
        }
    }
}

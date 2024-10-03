<?php

declare(strict_types=1);

namespace App\Client\Infrastructure\External\CommandExternal\DeleteCommandByClientId;

use App\Client\Infrastructure\External\CommandExternal\CommandExternalException;
use App\Command\Presentation\API\DeleteCommandByClientIdAPI\DeleteCommandByClientIdAPI;

final readonly class DeleteCommandByClientId
{
    public function __construct(
        private DeleteCommandByClientIdAPI $deleteCommandByClientIdAPI,
    ) {
    }

    /**
     * @param int $clientId
     * @return void
     * @throws CommandExternalException
     */
    public function delete(int $clientId): void
    {
        $response = $this->deleteCommandByClientIdAPI->delete(['clientId' => $clientId]);
        if (!($response->getData(true)['status'])) {
            throw new CommandExternalException($response->getContent());
        }
    }
}

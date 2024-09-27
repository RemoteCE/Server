<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Service\CommandService;

use App\Client\Core\Contracts\Service\CommandServiceContract;
use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\Service\CommandService\CreateCommand\CreateCommand;
use App\Client\Infrastructure\Service\CommandService\DeleteCommandByClientId\DeleteCommandByClientId;

final readonly class CommandService implements CommandServiceContract
{
    public function __construct(
        private CreateCommand $createCommand,
        private DeleteCommandByClientId $deleteCommandByClientId,
    )
    {
    }

    public function createCommand(Client $client): void
    {
        $this->createCommand->createCommand($client);
    }

    public function deleteCommandByClientId(int $clientId): void
    {
        $this->deleteCommandByClientId->delete($clientId);
    }


}

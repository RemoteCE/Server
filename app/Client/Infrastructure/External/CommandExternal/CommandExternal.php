<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\External\CommandExternal;

use App\Client\Core\Contracts\External\CommandExternalContract;
use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\External\CommandExternal\CreateCommand\CreateCommand;
use App\Client\Infrastructure\External\CommandExternal\DeleteCommandByClientId\DeleteCommandByClientId;

final readonly class CommandExternal implements CommandExternalContract
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

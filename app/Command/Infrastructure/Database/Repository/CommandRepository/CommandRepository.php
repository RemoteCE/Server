<?php

declare(strict_types=1);

namespace App\Command\Infrastructure\Database\Repository\CommandRepository;

use App\Command\Core\Contracts\Database\Repository\CommandRepositoryContract;
use App\Command\Core\Domain\Entity\Command\Command;
use App\Command\Infrastructure\Database\Repository\CommandRepository\CreateCommand\CreateCommand;
use App\Command\Infrastructure\Database\Repository\CommandRepository\DeleteCommandByClientId\DeleteCommandByClientId;
use App\Command\Infrastructure\Database\Repository\CommandRepository\UpdateCommandByClientId\UpdateCommandByClientId;

final readonly class CommandRepository implements CommandRepositoryContract
{
    public function __construct(
        private CreateCommand $createCommand,
        private DeleteCommandByClientId $deleteCommandByClientId,
        private UpdateCommandByclientId $updateCommandByclientId,
    ) {
    }

    public function create(Command $command): bool
    {
        return $this->createCommand->create($command);
    }

    public function deleteByClientId(int $clientId): bool
    {
        return $this->deleteCommandByClientId->delete($clientId);
    }

    public function updateByClientId(int $clientId, Command $command): void
    {
        $this->updateCommandByclientId->update($clientId, $command);
    }


}

<?php
declare(strict_types=1);

namespace App\Command\Infrastructure\Database\Repository\CommandRepository;

use App\Command\Core\Contracts\Database\Repository\CommandRepositoryContract;
use App\Command\Core\Domain\Entity\Command\Command;
use App\Command\Infrastructure\Database\Repository\CommandRepository\CreateCommand\CreateCommand;

final readonly class CommandRepository implements CommandRepositoryContract
{
    public function __construct(private CreateCommand $createCommand)
    {
    }

    public function create(Command $command): void
    {
        $this->createCommand->create($command);
    }
}

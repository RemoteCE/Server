<?php
declare(strict_types=1);

namespace App\Command\Infrastructure\Database\Repository\CommandRepository\CreateCommand;

use App\Command\Core\Domain\Entity\Command\Command;
use App\Command\Infrastructure\Database\Models\Command as CommandModel;

final readonly class CreateCommand
{
    public function create(Command $command): void
    {
        (new CommandModel([
            'client_id' => $command->getClientId(),
            'command' => $command->getCommand(),
            'response' => $command->getResponse(),
        ]))->save();
    }
}

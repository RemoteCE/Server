<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Service\CommandService;

use App\Client\Core\Contracts\Service\CommandServiceContract;
use App\Client\Infrastructure\Service\CommandService\CreateCommand\CreateCommand;

final readonly class CommandService implements CommandServiceContract
{
    public function __construct(private CreateCommand $createCommand)
    {
    }

    public function createCommand(int $userId): void
    {
        $this->createCommand->createCommand($userId);
    }
}

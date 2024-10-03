<?php

declare(strict_types=1);

namespace App\Command\Infrastructure\Database\Repository\CommandRepository\UpdateCommandByClientId;

use App\Command\Core\Domain\Entity\Command\Command;
use App\Command\Infrastructure\Database\Models\Command as CommandModel;

final readonly class UpdateCommandByClientId
{
    public function __construct(private CommandModel $model)
    {
    }

    public function update(int $clientId, Command $command): bool
    {
        return $this->model->where('client_id', $clientId)->updateWithoutNulls([
            'client_id' => $command->getClientId(),
            'command' => $command->getCommand(),
            'response' => $command->getResponse(),
        ]);
    }
}

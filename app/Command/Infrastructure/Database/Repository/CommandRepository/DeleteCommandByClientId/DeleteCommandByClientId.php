<?php

declare(strict_types=1);

namespace App\Command\Infrastructure\Database\Repository\CommandRepository\DeleteCommandByClientId;

use App\Command\Infrastructure\Database\Models\Command as CommandModel;

final readonly class DeleteCommandByClientId
{
    public function __construct(private CommandModel $model)
    {
    }

    public function delete(int $clientId): bool
    {
        return $this->model->where('client_id', $clientId)->delete();
    }
}

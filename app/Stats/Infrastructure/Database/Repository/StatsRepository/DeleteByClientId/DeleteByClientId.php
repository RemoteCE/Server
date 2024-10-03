<?php

declare(strict_types=1);

namespace App\Stats\Infrastructure\Database\Repository\StatsRepository\DeleteByClientId;

use App\Stats\Infrastructure\Database\Models\Stats as StatsModel;

class DeleteByClientId
{
    public function __construct(private StatsModel $model)
    {
    }

    public function delete(int $clientId): bool
    {
        $this->model->where('client_id', $clientId)->delete();
        return true;
    }
}

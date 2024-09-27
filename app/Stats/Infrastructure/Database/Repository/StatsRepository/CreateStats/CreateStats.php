<?php
declare(strict_types=1);

namespace App\Stats\Infrastructure\Database\Repository\StatsRepository\CreateStats;

use App\Stats\Core\Domain\Entity\Stats\Stats;
use App\Stats\Infrastructure\Database\Models\Stats as StatsModel;

class CreateStats
{
    public function create(Stats $stats): void
    {
        $newStats = new StatsModel([
            'client_id' => $stats->getClientId(),
            'last_active' => $stats->getLastActive()
        ]);

        $newStats->save();
    }
}

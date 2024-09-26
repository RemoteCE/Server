<?php
declare(strict_types=1);

namespace App\Stats\Infrastructure\Database\Repository;

use App\Stats\Application\Contracts\Repository\StatsRepositoryContract;
use App\Stats\Core\Domain\Entity\Stats\Stats;
use App\Stats\Infrastructure\Database\Models\Stats as StatsModel;

final readonly class StatsRepository implements StatsRepositoryContract
{
    public function create(Stats $stats): void
    {
        $newStats = new StatsModel();
        $newStats->client_id = $stats->getClientId();
        $newStats->last_active = $stats->getLastActive();

        $newStats->save();
    }

}

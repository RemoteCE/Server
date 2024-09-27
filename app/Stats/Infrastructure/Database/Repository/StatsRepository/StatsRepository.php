<?php
declare(strict_types=1);

namespace App\Stats\Infrastructure\Database\Repository\StatsRepository;

use App\Stats\Core\Contracts\Database\Repository\StatsRepositoryContract;
use App\Stats\Core\Domain\Entity\Stats\Stats;
use App\Stats\Infrastructure\Database\Repository\StatsRepository\CreateStats\CreateStats;

final readonly class StatsRepository implements StatsRepositoryContract
{
    public function __construct(private CreateStats $createStats)
    {

    }

    public function create(Stats $stats): void
    {
        $this->createStats->create($stats);
    }

}

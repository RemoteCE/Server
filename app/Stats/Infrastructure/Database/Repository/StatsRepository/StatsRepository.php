<?php

declare(strict_types=1);

namespace App\Stats\Infrastructure\Database\Repository\StatsRepository;

use App\Stats\Core\Contracts\Database\Repository\StatsRepositoryContract;
use App\Stats\Core\Domain\Entity\Stats\Stats;
use App\Stats\Infrastructure\Database\Repository\StatsRepository\CreateStats\CreateStats;
use App\Stats\Infrastructure\Database\Repository\StatsRepository\DeleteByClientId\DeleteByClientId;

final readonly class StatsRepository implements StatsRepositoryContract
{
    public function __construct(
        private CreateStats $createStats,
        private DeleteByClientId $deleteByClientId,
    ) {
    }

    public function create(Stats $stats): bool
    {
        return $this->createStats->create($stats);
    }

    public function deleteByClientId(int $clientId): bool
    {
        return $this->deleteByClientId->delete($clientId);
    }


}

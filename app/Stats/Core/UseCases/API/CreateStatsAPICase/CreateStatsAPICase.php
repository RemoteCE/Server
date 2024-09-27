<?php
declare(strict_types=1);

namespace App\Stats\Core\UseCases\API\CreateStatsAPICase;

use App\Stats\Application\RequestDTO\CreateStatsRequestDTO;
use App\Stats\Core\Contracts\Database\Repository\StatsRepositoryContract;
use App\Stats\Core\Domain\Entity\Stats\Stats;

final readonly class CreateStatsAPICase implements CreateStatsAPICaseContract
{
    public function __construct(private StatsRepositoryContract $statsRepository)
    {
    }

    public function create(CreateStatsRequestDTO $createStatsRequestDTO): void
    {
        $this->statsRepository->create(Stats::fromArray($createStatsRequestDTO->toArray()));
    }

}

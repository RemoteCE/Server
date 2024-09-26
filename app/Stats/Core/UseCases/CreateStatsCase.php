<?php
declare(strict_types=1);

namespace App\Stats\Core\UseCases;

use App\Stats\Application\Contracts\Repository\StatsRepositoryContract;
use App\Stats\Application\Contracts\UseCases\CreateStatsCaseContract;
use App\Stats\Application\RequestDTO\CreateStatsRequestDTO;
use App\Stats\Core\Domain\Entity\Stats\Stats;

final readonly class CreateStatsCase implements CreateStatsCaseContract
{
    public function __construct(private StatsRepositoryContract $statsRepository)
    {
    }

    public function create(CreateStatsRequestDTO $createStatsRequestDTO): void
    {
        $this->statsRepository->create(Stats::fromArray($createStatsRequestDTO->toArray()));
    }

}

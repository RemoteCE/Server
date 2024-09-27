<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases\CreateStatsCase;

use App\Client\Core\Contracts\Service\StatsServiceContract;
use App\Client\Core\Domain\Entity\Client\Client;

final readonly class CreateStatsCase implements CreateStatsCaseContract
{
    public function __construct(private StatsServiceContract $statsService)
    {
    }

    public function create(Client $client): void
    {
        $this->statsService->createStats($client);
    }

}

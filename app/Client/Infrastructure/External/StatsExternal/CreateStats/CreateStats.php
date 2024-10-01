<?php

declare(strict_types=1);

namespace App\Client\Infrastructure\External\StatsExternal\CreateStats;

use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\External\StatsExternal\StatsExternalException;
use App\Stats\Application\RequestDTOFactory\CreateStatsRequestDTOFactory\CreateStatsRequestDTOFactoryContract;
use App\Stats\Application\Service\CreateStatsService\CreateStatsServiceContract;

final readonly class CreateStats
{
    public function __construct(
        private CreateStatsServiceContract $createStatsAPI,
        private CreateStatsRequestDTOFactoryContract $createStatsRequestDTOFactory

    ) {
    }


    /**
     * @param Client $client
     * @return void
     * @throws StatsExternalException
     */
    public function createStats(Client $client): void
    {
        try {
            $this->createStatsAPI->create($client->getId());
        } catch (\Exception $e) {
            throw new StatsExternalException($e->getMessage());
        }
    }
}

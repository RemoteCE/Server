<?php

declare(strict_types=1);

namespace App\Client\Infrastructure\External\StatsExternal\CreateStats;

use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\External\StatsExternal\StatsExternalException;
use App\Stats\Presentation\API\CreateStatsAPI\CreateStatsAPI;

final readonly class CreateStats
{
    public function __construct(
        private CreateStatsAPI $createStatsAPI,
    ) {
    }


    /**
     * @param Client $client
     * @return void
     * @throws StatsExternalException
     */
    public function createStats(Client $client): void
    {
        $response = $this->createStatsAPI->create(['clientId' => $client->getId()]);
        if (!($response->getData(true)['status'])) {
            throw new StatsExternalException($response->getContent());
        }
    }
}

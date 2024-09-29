<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\External\StatsExternal\CreateStats;

use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\External\StatsExternal\StatsExternalException;
use App\Stats\Application\API\CreateStatsAPI\CreateStatsAPIContract;

final readonly class CreateStats
{
    public function __construct(private CreateStatsAPIContract $createStatsAPI)
    {
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
        }
        catch (\Exception $e) {
            throw new StatsExternalException($e->getMessage());
        }
    }
}

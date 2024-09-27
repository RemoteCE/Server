<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Service\StatsService\CreateStats;

use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\Service\StatsService\StatsServiceException;
use App\Stats\Application\API\CreateStatsAPI\CreateStatsAPIContract;

final readonly class CreateStats
{
    public function __construct(private CreateStatsAPIContract $createStatsAPI)
    {
    }


    /**
     * @param Client $client
     * @return void
     * @throws StatsServiceException
     */
    public function createStats(Client $client): void
    {
        try {
            $this->createStatsAPI->create($client->getId());
        }
        catch (\Exception $e) {
            throw new StatsServiceException($e->getMessage());
        }
    }
}

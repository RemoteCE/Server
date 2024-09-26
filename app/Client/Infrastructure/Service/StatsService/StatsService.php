<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Service\StatsService;

use App\Client\Core\Contracts\Service\StatsServiceContract;
use App\Client\Core\Domain\Entity\Client\Client;
use App\Stats\Application\API\CreateStatsAPI\CreateStatsAPIContract;

class StatsService implements StatsServiceContract
{
    public function __construct(private CreateStatsAPIContract $createStatsAPI)
    {
    }


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

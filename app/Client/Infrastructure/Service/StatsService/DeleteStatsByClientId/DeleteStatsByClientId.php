<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Service\StatsService\DeleteStatsByClientId;

use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\Service\StatsService\StatsServiceException;
use App\Stats\Application\API\CreateStatsAPI\CreateStatsAPIContract;
use App\Stats\Application\API\DeleteStatsByClientIdAPI\DeleteStatsByClientIdAPIContract;

class DeleteStatsByClientId
{
    public function __construct(private DeleteStatsByClientIdAPIContract $deleteStatsByClientIdAPI)
    {
    }


    public function delete(int $clientId): void
    {
        $this->deleteStatsByClientIdAPI->delete($clientId);
    }
}

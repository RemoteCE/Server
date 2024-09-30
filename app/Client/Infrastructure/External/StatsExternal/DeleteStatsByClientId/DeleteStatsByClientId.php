<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\External\StatsExternal\DeleteStatsByClientId;

use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\External\StatsExternal\StatsExternalException;
use App\Stats\Application\Service\CreateStatsService\CreateStatsServiceContract;
use App\Stats\Application\Service\DeleteStatsByClientIdService\DeleteStatsByClientIdServiceContract;

class DeleteStatsByClientId
{
    public function __construct(private DeleteStatsByClientIdServiceContract $deleteStatsByClientIdAPI)
    {
    }


    public function delete(int $clientId): void
    {
        $this->deleteStatsByClientIdAPI->delete($clientId);
    }
}

<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\External\StatsExternal;

use App\Client\Core\Contracts\External\StatsExternalContract;
use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\External\StatsExternal\CreateStats\CreateStats;
use App\Client\Infrastructure\External\StatsExternal\DeleteStatsByClientId\DeleteStatsByClientId;

final readonly class StatsExternal implements StatsExternalContract
{
    public function __construct(
        private CreateStats $createStats,
        private DeleteStatsByClientId $deleteStatsByClientId
    )
    {
    }


    public function createStats(Client $client): void
    {
        $this->createStats->createStats($client);
    }

    public function deleteStatsByClientId(int $clientId): void
    {
        $this->deleteStatsByClientId->delete($clientId);
    }


}

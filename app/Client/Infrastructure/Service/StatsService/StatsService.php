<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Service\StatsService;

use App\Client\Core\Contracts\Service\StatsServiceContract;
use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\Service\StatsService\CreateStats\CreateStats;
use App\Client\Infrastructure\Service\StatsService\DeleteStatsByClientId\DeleteStatsByClientId;

final readonly class StatsService implements StatsServiceContract
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

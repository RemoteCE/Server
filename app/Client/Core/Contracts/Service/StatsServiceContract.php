<?php
declare(strict_types=1);

namespace App\Client\Core\Contracts\Service;

use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\Service\StatsService\StatsServiceException;

interface StatsServiceContract
{
    /**
     * @param Client $client
     * @return void
     * @throws StatsServiceException
     */
    public function createStats(Client $client): void;

    /**
     * @param int $clientId
     * @return void
     */
    public function deleteStatsByClientId(int $clientId): void;

}

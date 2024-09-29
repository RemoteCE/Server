<?php
declare(strict_types=1);

namespace App\Client\Core\Contracts\External;

use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\External\StatsExternal\StatsExternalException;

interface StatsExternalContract
{
    /**
     * @param Client $client
     * @return void
     * @throws StatsExternalException
     */
    public function createStats(Client $client): void;

    /**
     * @param int $clientId
     * @return void
     */
    public function deleteStatsByClientId(int $clientId): void;

}

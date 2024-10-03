<?php

declare(strict_types=1);

namespace App\Client\Infrastructure\External\StatsExternal\DeleteStatsByClientId;

use App\Client\Infrastructure\External\StatsExternal\StatsExternalException;
use App\Stats\Presentation\API\DeleteStatsByClientIdAPI\DeleteStatsByClientIdAPI;

class DeleteStatsByClientId
{
    public function __construct(private DeleteStatsByClientIdAPI $deleteStatsByClientIdAPI)
    {
    }

    /**
     * @param int $clientId
     * @return void
     * @throws StatsExternalException
     */
    public function delete(int $clientId): void
    {
        $response = $this->deleteStatsByClientIdAPI->delete(['clientId' => $clientId]);
        if (!($response->getData(true)['status'])) {
            throw new StatsExternalException($response->getContent());
        }
    }
}

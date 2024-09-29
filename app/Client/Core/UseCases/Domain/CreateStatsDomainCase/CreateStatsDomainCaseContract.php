<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases\Domain\CreateStatsDomainCase;

use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\External\StatsExternal\StatsExternalException;

interface CreateStatsDomainCaseContract
{
    /**
     * @param Client $client
     * @return void
     * @throws StatsExternalException
     */
    public function create(Client $client): void;
}

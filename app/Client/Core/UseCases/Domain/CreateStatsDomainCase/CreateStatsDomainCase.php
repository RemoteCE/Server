<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases\Domain\CreateStatsDomainCase;

use App\Client\Core\Contracts\External\StatsExternalContract;
use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\External\ExternalException;

final readonly class CreateStatsDomainCase implements CreateStatsDomainCaseContract
{
    public function __construct(private StatsExternalContract $statsExternal)
    {
    }

    public function create(Client $client): void
    {
        $this->statsExternal->createStats($client);
    }

}

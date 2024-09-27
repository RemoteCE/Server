<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases\Domain\CreateStatsDomainCase;

use App\Client\Core\Contracts\Service\StatsServiceContract;
use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\Service\ServiceException;

final readonly class CreateStatsDomainCase implements CreateStatsDomainCaseContract
{
    public function __construct(private StatsServiceContract $statsService)
    {
    }

    public function create(Client $client): void
    {
        $this->statsService->createStats($client);
    }

}

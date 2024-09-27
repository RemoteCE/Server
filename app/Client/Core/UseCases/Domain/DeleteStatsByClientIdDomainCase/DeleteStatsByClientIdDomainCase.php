<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases\Domain\DeleteStatsByClientIdDomainCase;

use App\Client\Core\Contracts\Service\StatsServiceContract;
use App\Client\Core\Domain\Entity\Client\Client;

final readonly class DeleteStatsByClientIdDomainCase implements DeleteStatsByClientIdDomainCaseContract
{
    public function __construct(private StatsServiceContract $statsService)
    {
    }

    public function delete(Client $client): void
    {
        $this->statsService->deleteStatsByClientId($client->getId());
    }
}

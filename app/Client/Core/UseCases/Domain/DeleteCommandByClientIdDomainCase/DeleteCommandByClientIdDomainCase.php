<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases\Domain\DeleteCommandByClientIdDomainCase;

use App\Client\Core\Contracts\Service\CommandServiceContract;
use App\Client\Core\Domain\Entity\Client\Client;

final readonly class DeleteCommandByClientIdDomainCase implements DeleteCommandByClientIdDomainCaseContract
{
    public function __construct(private CommandServiceContract $commandService)
    {

    }


    public function delete(Client $client): void
    {
        $this->commandService->deleteCommandByClientId($client->getId());
    }
}

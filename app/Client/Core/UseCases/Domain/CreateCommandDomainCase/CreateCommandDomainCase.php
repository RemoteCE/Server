<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases\Domain\CreateCommandDomainCase;

use App\Client\Core\Contracts\Service\CommandServiceContract;
use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\Service\ServiceException;

final readonly class CreateCommandDomainCase implements CreateCommandDomainCaseContract
{
    public function __construct(private CommandServiceContract $commandService)
    {

    }

    public function create(Client $client): void
    {
        $this->commandService->createCommand($client);
    }
}

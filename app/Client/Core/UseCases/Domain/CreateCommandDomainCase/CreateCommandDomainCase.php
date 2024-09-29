<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases\Domain\CreateCommandDomainCase;

use App\Client\Core\Contracts\External\CommandExternalContract;
use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\External\ExternalException;

final readonly class CreateCommandDomainCase implements CreateCommandDomainCaseContract
{
    public function __construct(private CommandExternalContract $commandExternal)
    {

    }

    public function create(Client $client): void
    {
        $this->commandExternal->createCommand($client);
    }
}

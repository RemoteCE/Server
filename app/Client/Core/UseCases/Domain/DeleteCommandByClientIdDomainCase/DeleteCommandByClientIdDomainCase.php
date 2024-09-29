<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases\Domain\DeleteCommandByClientIdDomainCase;

use App\Client\Core\Contracts\External\CommandExternalContract;
use App\Client\Core\Domain\Entity\Client\Client;

final readonly class DeleteCommandByClientIdDomainCase implements DeleteCommandByClientIdDomainCaseContract
{
    public function __construct(private CommandExternalContract $commandExternal)
    {

    }


    public function delete(Client $client): void
    {
        $this->commandExternal->deleteCommandByClientId($client->getId());
    }
}

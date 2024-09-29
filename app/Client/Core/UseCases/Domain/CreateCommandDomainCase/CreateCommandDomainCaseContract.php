<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases\Domain\CreateCommandDomainCase;

use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\External\CommandExternal\CreateCommand\CommandExternalCreateCommandException;

interface CreateCommandDomainCaseContract
{
    /**
     * @param Client $client
     * @return void
     * @throws CommandExternalCreateCommandException
     */
    public function create(Client $client): void;
}

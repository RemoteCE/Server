<?php
declare(strict_types=1);

namespace App\Client\Core\Contracts\External;

use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\External\CommandExternal\CommandExternalException;
use App\Client\Infrastructure\External\CommandExternal\CreateCommand\CommandExternalCreateCommandException;

interface CommandExternalContract
{
    /**
     * @param Client $client
     * @return void
     * @throws CommandExternalCreateCommandException
     */
    public function createCommand(Client $client): void;

    /**
     * @param int $clientId
     * @return void
     */
    public function deleteCommandByClientId(int $clientId): void;
}

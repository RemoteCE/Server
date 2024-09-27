<?php
declare(strict_types=1);

namespace App\Client\Core\Contracts\Service;

use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\Service\CommandService\CommandServiceException;
use App\Client\Infrastructure\Service\CommandService\CreateCommand\CommandServiceCreateCommandException;

interface CommandServiceContract
{
    /**
     * @param Client $client
     * @return void
     * @throws CommandServiceCreateCommandException
     */
    public function createCommand(Client $client): void;

    /**
     * @param int $clientId
     * @return void
     */
    public function deleteCommandByClientId(int $clientId): void;
}

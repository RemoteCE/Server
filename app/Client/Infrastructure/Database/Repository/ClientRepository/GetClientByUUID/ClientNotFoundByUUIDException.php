<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Database\Repository\ClientRepository\GetClientByUUID;

use App\Client\Infrastructure\Database\Repository\ClientRepository\ClientRepositoryException;

class ClientNotFoundByUUIDException extends ClientRepositoryException
{
    public function __construct(string $uuid)
    {
        parent::__construct("Client with UUID '$uuid' not found");
    }
}

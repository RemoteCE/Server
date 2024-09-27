<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Database\Repository\ClientRepository\GetClientById;

use App\Client\Infrastructure\Database\Repository\ClientRepository\ClientRepositoryException;

class ClientNotFoundByIdException extends ClientRepositoryException
{
    public function __construct(int $id)
    {
        parent::__construct("Client with Id '$id' not found");
    }
}

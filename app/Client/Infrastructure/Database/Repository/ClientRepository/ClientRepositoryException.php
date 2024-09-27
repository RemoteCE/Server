<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Database\Repository\ClientRepository;

use App\Client\Infrastructure\Database\Repository\RepositoryException;

class ClientRepositoryException extends RepositoryException
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}

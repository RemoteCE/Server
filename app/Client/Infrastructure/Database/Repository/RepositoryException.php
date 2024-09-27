<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Database\Repository;

use App\Client\Infrastructure\Database\DatabaseException;

class RepositoryException extends DatabaseException
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}

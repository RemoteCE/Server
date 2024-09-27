<?php
declare(strict_types=1);

namespace App\Stats\Infrastructure\Database\Repository;

use App\Stats\Infrastructure\Database\DatabaseException;

class RepositoryException extends DatabaseException
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}

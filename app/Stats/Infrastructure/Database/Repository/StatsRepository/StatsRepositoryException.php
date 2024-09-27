<?php
declare(strict_types=1);

namespace App\Stats\Infrastructure\Database\Repository\StatsRepository;

use App\Stats\Infrastructure\Database\Repository\RepositoryException;

class StatsRepositoryException extends RepositoryException
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}

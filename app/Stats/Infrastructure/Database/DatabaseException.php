<?php
declare(strict_types=1);

namespace App\Stats\Infrastructure\Database;

class DatabaseException extends \Exception
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}

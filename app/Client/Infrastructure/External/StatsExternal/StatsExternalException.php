<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\External\StatsExternal;

use App\Client\Infrastructure\External\ExternalException;

class StatsExternalException extends ExternalException
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}

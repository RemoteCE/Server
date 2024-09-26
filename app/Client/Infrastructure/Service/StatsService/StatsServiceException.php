<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Service\StatsService;

use App\Client\Infrastructure\Service\ServiceException;

class StatsServiceException extends ServiceException
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}

<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Service;

class ServiceException extends \Exception
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}

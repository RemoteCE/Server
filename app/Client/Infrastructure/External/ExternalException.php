<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\External;

class ExternalException extends \Exception
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}

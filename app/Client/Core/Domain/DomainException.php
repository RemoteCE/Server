<?php
declare(strict_types=1);

namespace App\Client\Core\Domain;


class DomainException extends \Exception
{
    public function __construct(string $message = "")
    {
        parent::__construct($message);
    }
}

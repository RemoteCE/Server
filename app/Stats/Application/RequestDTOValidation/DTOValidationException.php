<?php
declare(strict_types=1);

namespace App\Stats\Application\RequestDTOValidation;

class DTOValidationException extends \Exception
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}

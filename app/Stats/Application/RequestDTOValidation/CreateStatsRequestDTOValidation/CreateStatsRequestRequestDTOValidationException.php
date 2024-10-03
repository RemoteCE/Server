<?php

declare(strict_types=1);

namespace App\Stats\Application\RequestDTOValidation\CreateStatsRequestDTOValidation;

use App\Stats\Application\RequestDTOValidation\RequestDTOValidationException;

class CreateStatsRequestRequestDTOValidationException extends RequestDTOValidationException
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}

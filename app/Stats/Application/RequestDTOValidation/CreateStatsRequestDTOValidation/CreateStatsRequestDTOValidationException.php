<?php
declare(strict_types=1);

namespace App\Stats\Application\RequestDTOValidation\CreateStatsRequestDTOValidation;

use App\Stats\Application\RequestDTOValidation\DTOValidationException;

class CreateStatsRequestDTOValidationException extends DTOValidationException
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}

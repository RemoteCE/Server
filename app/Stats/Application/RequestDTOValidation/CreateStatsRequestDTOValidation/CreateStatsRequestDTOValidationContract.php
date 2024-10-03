<?php

declare(strict_types=1);

namespace App\Stats\Application\RequestDTOValidation\CreateStatsRequestDTOValidation;

interface CreateStatsRequestDTOValidationContract
{
    /**
     * @param array $data
     * @return void
     * @throws CreateStatsRequestRequestDTOValidationException
     */
    public function validate(array $data): void;
}

<?php
declare(strict_types=1);

namespace App\Stats\Application\RequestDTOValidation\CreateStatsRequestDTOValidation;

use App\Stats\Application\RequestDTO\CreateStatsRequestDTO;
use App\Stats\Application\RequestDTOValidation\CreateStatsRequestDTOValidation\CreateStatsRequestDTOValidationException;

interface CreateStatsRequestDTOValidationContract
{
    /**
     * @param CreateStatsRequestDTO $createStatsRequestDTO
     * @return void
     * @throws CreateStatsRequestDTOValidationException
     */
    public function validate(CreateStatsRequestDTO $createStatsRequestDTO): void;
}

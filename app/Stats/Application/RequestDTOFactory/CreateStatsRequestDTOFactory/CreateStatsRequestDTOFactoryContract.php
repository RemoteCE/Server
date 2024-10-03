<?php

declare(strict_types=1);

namespace App\Stats\Application\RequestDTOFactory\CreateStatsRequestDTOFactory;

use App\Stats\Application\RequestDTO\CreateStatsRequestDTO;
use App\Stats\Application\RequestDTOValidation\CreateStatsRequestDTOValidation\CreateStatsRequestRequestDTOValidationException;

interface CreateStatsRequestDTOFactoryContract
{
    /**
     * @param array $data
     * @return CreateStatsRequestDTO
     * @throws CreateStatsRequestRequestDTOValidationException
     */
    public function create(array $data): CreateStatsRequestDTO;
}

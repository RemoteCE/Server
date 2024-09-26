<?php
declare(strict_types=1);

namespace App\Stats\Application\RequestDTOFactory\CreateStatsRequestDTOFactory;

use App\Stats\Application\RequestDTO\CreateStatsRequestDTO;
use App\Stats\Application\RequestDTOValidation\CreateStatsRequestDTOValidation\CreateStatsRequestDTOValidationException;

interface CreateStatsRequestDTOFactoryContract
{
    /**
     * @param int $clientId
     * @return CreateStatsRequestDTO
     * @throws CreateStatsRequestDTOValidationException
     */
    public function create(int $clientId): CreateStatsRequestDTO;
}

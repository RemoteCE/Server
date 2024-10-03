<?php

declare(strict_types=1);

namespace App\Stats\Application\RequestDTOFactory\DeleteStatsByClientIdRequestDTOFactory;

use App\Stats\Application\RequestDTO\DeleteStatsByClientIdRequestDTO;
use App\Stats\Application\RequestDTOValidation\DeleteStatsByClientIdRequestDTOValidation\DeleteStatsByClientIdRequestRequestDTOValidationException;

interface DeleteStatsByClientIdRequestDTOFactoryContract
{
    /**
     * @param array $data
     * @return DeleteStatsByClientIdRequestDTO
     * @throws DeleteStatsByClientIdRequestRequestDTOValidationException
     */
    public function create(array $data): DeleteStatsByClientIdRequestDTO;
}

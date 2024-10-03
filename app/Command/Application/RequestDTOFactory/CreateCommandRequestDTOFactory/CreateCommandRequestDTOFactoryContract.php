<?php

declare(strict_types=1);

namespace App\Command\Application\RequestDTOFactory\CreateCommandRequestDTOFactory;

use App\Command\Application\RequestDTO\CreateCommandRequestDTO;
use App\Command\Application\RequestDTOValidation\CreateCommandRequestDTOValidation\CreateCommandRequestDTOValidationException;

interface CreateCommandRequestDTOFactoryContract
{
    /**
     * @param string $clientId
     * @return CreateCommandRequestDTO
     * @throws CreateCommandRequestDTOValidationException
     */
    public function create(string $clientId): CreateCommandRequestDTO;
}

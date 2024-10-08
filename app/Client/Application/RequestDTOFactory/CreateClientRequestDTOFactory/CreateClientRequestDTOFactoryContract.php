<?php

declare(strict_types=1);

namespace App\Client\Application\RequestDTOFactory\CreateClientRequestDTOFactory;

use App\Client\Application\RequestDTO\CreateClientRequestDTO;
use App\Client\Application\RequestDTOValidation\CreateClientRequestDTOValidation\CreateClientRequestDTOValidationException;

interface CreateClientRequestDTOFactoryContract
{
    /**
     * @param array $data
     * @return CreateClientRequestDTO
     * @throws CreateClientRequestDTOValidationException
     */
    public function create(array $data): CreateClientRequestDTO;
}

<?php

declare(strict_types=1);

namespace App\Client\Application\RequestDTOFactory\GetClientByUUIDRequestDTOFactory;

use App\Client\Application\RequestDTO\GetClientByUUIDRequestDTO;
use App\Client\Application\RequestDTOValidation\GetClientByUUIDRequestDTOValidation\GetClientByUUIDRequestDTOValidationException;

interface GetClientByUUIDRequestDTOFactoryContract
{
    /**
     * @param array $data
     * @return GetClientByUUIDRequestDTO
     * @throws GetClientByUUIDRequestDTOValidationException
     */
    public function create(array $data): GetClientByUUIDRequestDTO;
}

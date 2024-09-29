<?php
declare(strict_types=1);

namespace App\Client\Application\RequestDTOFactory\GetClientByUUIDAPIRequestDTOFactory;

use App\Client\Application\RequestDTO\GetClientByUUIDRequestDTO;
use App\Client\Application\RequestDTOValidation\GetClientByUUIDAPIRequestDTOValidation\GetClientByUUIDAPIRequestDTOValidationException;

interface GetClientByUUIDAPIRequestDTOFactoryContract
{
    /**
     * @param string $uuid
     * @return GetClientByUUIDRequestDTO
     * @throws GetClientByUUIDAPIRequestDTOValidationException
     */
    public function create(string $uuid): GetClientByUUIDRequestDTO;
}

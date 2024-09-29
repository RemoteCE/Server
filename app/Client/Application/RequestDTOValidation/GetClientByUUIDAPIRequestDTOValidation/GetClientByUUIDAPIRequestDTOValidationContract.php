<?php
declare(strict_types=1);

namespace App\Client\Application\RequestDTOValidation\GetClientByUUIDAPIRequestDTOValidation;

use App\Client\Application\RequestDTO\GetClientByUUIDRequestDTO;

interface GetClientByUUIDAPIRequestDTOValidationContract
{
    /**
     * @param GetClientByUUIDRequestDTO $getClientByUUIDRequestDTO
     * @return void
     * @throws GetClientByUUIDAPIRequestDTOValidationException
     */
    public function validate(GetClientByUUIDRequestDTO $getClientByUUIDRequestDTO): void;
}

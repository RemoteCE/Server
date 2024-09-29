<?php
declare(strict_types=1);

namespace App\Client\Application\RequestDTOValidation\GetClientByUUIDRequestDTOValidation;

use App\Client\Application\RequestDTO\GetClientByUUIDRequestDTO;

interface GetClientByUUIDRequestDTOValidationContract
{
    /**
     * @param GetClientByUUIDRequestDTO $getClientByUUIDRequestDTO
     * @return void
     * @throws GetClientByUUIDRequestDTOValidationException
     */
    public function validate(GetClientByUUIDRequestDTO $getClientByUUIDRequestDTO): void;
}

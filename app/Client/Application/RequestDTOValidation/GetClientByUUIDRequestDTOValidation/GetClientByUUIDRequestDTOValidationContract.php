<?php

declare(strict_types=1);

namespace App\Client\Application\RequestDTOValidation\GetClientByUUIDRequestDTOValidation;

interface GetClientByUUIDRequestDTOValidationContract
{
    /**
     * @param array $data
     * @return void
     * @throws GetClientByUUIDRequestDTOValidationException
     */
    public function validate(array $data): void;
}

<?php

declare(strict_types=1);

namespace App\Client\Application\RequestDTOValidation\CreateClientRequestDTOValidation;

interface CreateClientRequestDTOValidationContract
{
    /**
     * @param array $data
     * @return void
     *
     * @throws CreateClientRequestDTOValidationException
     */
    public function validate(array $data): void;
}

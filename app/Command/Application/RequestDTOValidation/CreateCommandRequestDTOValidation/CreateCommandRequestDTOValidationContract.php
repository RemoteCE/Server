<?php

declare(strict_types=1);

namespace App\Command\Application\RequestDTOValidation\CreateCommandRequestDTOValidation;

interface CreateCommandRequestDTOValidationContract
{
    /**
     * @param array $data
     * @return void
     * @throws CreateCommandRequestDTOValidationException
     */
    public function validate(array $data): void;
}

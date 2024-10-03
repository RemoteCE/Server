<?php

declare(strict_types=1);

namespace App\Command\Application\RequestDTOValidation\UpdateCommandByClientIdRequestDTOValidation;

interface UpdateCommandByClientIdRequestDTOValidationContract
{
    /**
     * @param array $data
     * @return void
     * @throws UpdateCommandByClientIdRequestDTOValidationException
     */
    public function validate(array $data): void;
}

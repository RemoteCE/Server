<?php

declare(strict_types=1);

namespace App\Command\Application\RequestDTOValidation\DeleteCommandByClientIdRequestDTOValidation;

interface DeleteCommandByClientIdRequestDTOValidationContract
{
    /**
     * @param array $data
     * @return void
     * @throws DeleteCommandByClientIdRequestDTOValidationException
     */
    public function validate(array $data): void;
}

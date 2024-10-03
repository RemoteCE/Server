<?php

declare(strict_types=1);

namespace App\Stats\Application\RequestDTOValidation\DeleteStatsByClientIdRequestDTOValidation;

interface DeleteStatsByClientIdRequestDTOValidationContract
{
    /**
     * @param array $data
     * @return void
     * @throws DeleteStatsByClientIdRequestRequestDTOValidationException
     */
    public function validate(array $data): void;
}

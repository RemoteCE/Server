<?php
declare(strict_types=1);

namespace App\Client\Application\RequestDTOValidation\CreateClientRequestDTOValidation;

use App\Client\Application\RequestDTO\CreateClientRequestDTO;

interface CreateClientRequestDTOValidationContract
{
    /**
     * @param CreateClientRequestDTO $createClientRequestDTO
     * @return void
     *
     * @throws CreateClientRequestDTOValidationException
     */
    public function validate(CreateClientRequestDTO $createClientRequestDTO): void;
}

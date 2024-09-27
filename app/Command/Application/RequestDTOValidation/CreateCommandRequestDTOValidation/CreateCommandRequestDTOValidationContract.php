<?php
declare(strict_types=1);

namespace App\Command\Application\RequestDTOValidation\CreateCommandRequestDTOValidation;

use App\Command\Application\RequestDTO\CreateCommandRequestDTO;

interface CreateCommandRequestDTOValidationContract
{
    /**
     * @param CreateCommandRequestDTO $createCommandRequestDTO
     * @return void
     * @throws CreateCommandRequestDTOValidationException
     */
    public function validate(CreateCommandRequestDTO $createCommandRequestDTO): void;
}

<?php
declare(strict_types=1);

namespace App\Command\Application\RequestDTOValidation\UpdateCommandByClientIdRequestDTOValidation;

use App\Command\Application\RequestDTO\UpdateCommandByClientIdRequestDTO;

interface UpdateCommandByClientIdRequestDTOValidationContract
{
    /**
     * @param UpdateCommandByClientIdRequestDTO $updateCommandByClientIdRequestDTO
     * @return void
     * @throws UpdateCommandByClientIdRequestDTOValidationException
     */
    public function validate(UpdateCommandByClientIdRequestDTO $updateCommandByClientIdRequestDTO): void;
}

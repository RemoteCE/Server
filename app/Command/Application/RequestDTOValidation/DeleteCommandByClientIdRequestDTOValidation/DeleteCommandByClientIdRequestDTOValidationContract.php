<?php
declare(strict_types=1);

namespace App\Command\Application\RequestDTOValidation\DeleteCommandByClientIdRequestDTOValidation;

use App\Command\Application\RequestDTO\DeleteCommandByClientIdRequestDTO;

interface DeleteCommandByClientIdRequestDTOValidationContract
{
    /**
     * @param DeleteCommandByClientIdRequestDTO $deleteCommandByClientIdRequestDTO
     * @return void
     * @throws DeleteCommandByClientIdRequestDTOValidationException
     */
   public function validate(DeleteCommandByClientIdRequestDTO $deleteCommandByClientIdRequestDTO): void;
}

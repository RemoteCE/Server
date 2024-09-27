<?php
declare(strict_types=1);

namespace App\Stats\Application\RequestDTOValidation\DeleteStatsByClientIdRequestDTOValidation;

use App\Stats\Application\RequestDTO\DeleteStatsByClientIdRequestDTO;

interface DeleteStatsByClientIdRequestDTOValidationContract
{
    /**
     * @param DeleteStatsByClientIdRequestDTO $deleteStatsByClientIdDTO
     * @return void
     * @throws DeleteStatsByClientIdRequestDTOValidationException
     */
    public function validate(DeleteStatsByClientIdRequestDTO $deleteStatsByClientIdDTO): void;
}

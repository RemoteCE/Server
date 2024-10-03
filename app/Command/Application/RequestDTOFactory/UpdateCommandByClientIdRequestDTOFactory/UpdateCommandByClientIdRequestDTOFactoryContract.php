<?php

declare(strict_types=1);

namespace App\Command\Application\RequestDTOFactory\UpdateCommandByClientIdRequestDTOFactory;

use App\Command\Application\RequestDTO\UpdateCommandByClientIdRequestDTO;
use App\Command\Application\RequestDTOValidation\UpdateCommandByClientIdRequestDTOValidation\UpdateCommandByClientIdRequestDTOValidationException;

interface UpdateCommandByClientIdRequestDTOFactoryContract
{
    /**
     * @param array $data
     * @return UpdateCommandByClientIdRequestDTO
     * @throws UpdateCommandByClientIdRequestDTOValidationException
     */
    public function create(array $data): UpdateCommandByClientIdRequestDTO;
}

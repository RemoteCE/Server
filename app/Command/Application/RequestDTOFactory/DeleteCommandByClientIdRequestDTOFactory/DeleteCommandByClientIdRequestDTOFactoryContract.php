<?php
declare(strict_types=1);

namespace App\Command\Application\RequestDTOFactory\DeleteCommandByClientIdRequestDTOFactory;

use App\Command\Application\RequestDTO\DeleteCommandByClientIdRequestDTO;
use App\Command\Application\RequestDTOValidation\DeleteCommandByClientIdRequestDTOValidation\DeleteCommandByClientIdRequestDTOValidationException;

interface DeleteCommandByClientIdRequestDTOFactoryContract
{
    /**
     * @param int $clientId
     * @return DeleteCommandByClientIdRequestDTO
     * @throws DeleteCommandByClientIdRequestDTOValidationException
     */
    public function create(int $clientId): DeleteCommandByClientIdRequestDTO;
}

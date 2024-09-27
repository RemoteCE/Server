<?php
declare(strict_types=1);

namespace App\Stats\Application\RequestDTOFactory\DeleteStatsByClientIdRequestDTOFactory;

use App\Stats\Application\RequestDTO\DeleteStatsByClientIdRequestDTO;
use App\Stats\Application\RequestDTOValidation\DeleteStatsByClientIdRequestDTOValidation\DeleteStatsByClientIdRequestDTOValidationException;

interface DeleteStatsByClientIdRequestDTOFactoryContract
{
    /**
     * @param int $clientId
     * @return DeleteStatsByClientIdRequestDTO
     * @throws DeleteStatsByClientIdRequestDTOValidationException
     */
    public function create(int $clientId): DeleteStatsByClientIdRequestDTO;
}

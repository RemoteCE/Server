<?php
declare(strict_types=1);

namespace App\Command\Application\RequestDTOFactory\UpdateCommandByClientIdRequestDTOFactory;

use App\Command\Application\RequestDTO\UpdateCommandByClientIdRequestDTO;
use App\Command\Application\RequestDTOValidation\UpdateCommandByClientIdRequestDTOValidation\UpdateCommandByClientIdRequestDTOValidationException;

interface UpdateCommandByClientIdRequestDTOFactoryContract
{
    /**
     * @param int $clientId
     * @param ?string $command
     * @param ?string $response
     * @return UpdateCommandByClientIdRequestDTO
     * @throws UpdateCommandByClientIdRequestDTOValidationException
     */
    public function create(int $clientId, ?string $command, ?string $response): UpdateCommandByClientIdRequestDTO;
}

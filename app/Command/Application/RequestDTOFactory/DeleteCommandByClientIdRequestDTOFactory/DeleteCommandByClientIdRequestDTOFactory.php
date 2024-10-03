<?php

declare(strict_types=1);

namespace App\Command\Application\RequestDTOFactory\DeleteCommandByClientIdRequestDTOFactory;

use App\Command\Application\RequestDTO\DeleteCommandByClientIdRequestDTO;
use App\Command\Application\RequestDTOValidation\DeleteCommandByClientIdRequestDTOValidation\DeleteCommandByClientIdRequestDTOValidationContract;

final readonly class DeleteCommandByClientIdRequestDTOFactory implements
    DeleteCommandByClientIdRequestDTOFactoryContract
{
    public function __construct(
        private DeleteCommandByClientIdRequestDTOValidationContract $deleteCommandByClientIdRequestDTOValidation
    ) {
    }

    public function create(array $data): DeleteCommandByClientIdRequestDTO
    {
        $this->deleteCommandByClientIdRequestDTOValidation->validate($data);
        return DeleteCommandByClientIdRequestDTO::fromArray($data);
    }
}

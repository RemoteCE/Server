<?php

declare(strict_types=1);

namespace App\Stats\Application\RequestDTOFactory\DeleteStatsByClientIdRequestDTOFactory;

use App\Stats\Application\RequestDTO\DeleteStatsByClientIdRequestDTO;
use App\Stats\Application\RequestDTOValidation\DeleteStatsByClientIdRequestDTOValidation\DeleteStatsByClientIdRequestDTOValidationContract;

final readonly class DeleteStatsByClientIdRequestDTOFactory implements DeleteStatsByClientIdRequestDTOFactoryContract
{
    public function __construct(
        private DeleteStatsByClientIdRequestDTOValidationContract $deleteStatsByClientIdDTOValidation
    ) {
    }

    public function create(array $data): DeleteStatsByClientIdRequestDTO
    {
        $this->deleteStatsByClientIdDTOValidation->validate($data);
        return DeleteStatsByClientIdRequestDTO::fromArray($data);
    }
}

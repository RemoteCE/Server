<?php

declare(strict_types=1);

namespace App\Command\Application\RequestDTOFactory\UpdateCommandByClientIdRequestDTOFactory;

use App\Command\Application\RequestDTO\UpdateCommandByClientIdRequestDTO;
use App\Command\Application\RequestDTOValidation\UpdateCommandByClientIdRequestDTOValidation\UpdateCommandByClientIdRequestDTOValidationContract;

final readonly class UpdateCommandByClientIdRequestDTOFactory implements
    UpdateCommandByClientIdRequestDTOFactoryContract
{
    public function __construct(
        private UpdateCommandByClientIdRequestDTOValidationContract $updateCommandByClientIdRequestDTOValidation
    ) {
    }

    public function create(array $data): UpdateCommandByClientIdRequestDTO
    {
        $this->updateCommandByClientIdRequestDTOValidation->validate($data);
        return UpdateCommandByClientIdRequestDTO::fromArray($data);
    }

}

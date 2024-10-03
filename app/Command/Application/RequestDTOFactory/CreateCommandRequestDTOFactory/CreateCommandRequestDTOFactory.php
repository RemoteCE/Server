<?php

declare(strict_types=1);

namespace App\Command\Application\RequestDTOFactory\CreateCommandRequestDTOFactory;

use App\Command\Application\RequestDTO\CreateCommandRequestDTO;
use App\Command\Application\RequestDTOValidation\CreateCommandRequestDTOValidation\CreateCommandRequestDTOValidationContract;

final readonly class CreateCommandRequestDTOFactory implements CreateCommandRequestDTOFactoryContract
{
    public function __construct(private CreateCommandRequestDTOValidationContract $createCommandRequestDTOValidation)
    {
    }

    public function create(array $data): CreateCommandRequestDTO
    {
        $this->createCommandRequestDTOValidation->validate($data);
        return createCommandRequestDTO::fromArray($data);
    }

}

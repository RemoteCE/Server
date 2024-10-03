<?php

declare(strict_types=1);

namespace App\Stats\Application\RequestDTOFactory\CreateStatsRequestDTOFactory;

use App\Stats\Application\RequestDTO\CreateStatsRequestDTO;
use App\Stats\Application\RequestDTOValidation\CreateStatsRequestDTOValidation\CreateStatsRequestDTOValidationContract;

final readonly class CreateStatsRequestDTOFactory implements CreateStatsRequestDTOFactoryContract
{
    public function __construct(private CreateStatsRequestDTOValidationContract $createStatsRequestDTOValidation)
    {
    }

    public function create(array $data): CreateStatsRequestDTO
    {
        $this->createStatsRequestDTOValidation->validate($data);
        return CreateStatsRequestDTO::fromArray($data);
    }
}

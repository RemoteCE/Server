<?php

declare(strict_types=1);

namespace App\Client\Application\RequestDTOFactory\GetClientByUUIDRequestDTOFactory;

use App\Client\Application\RequestDTO\GetClientByUUIDRequestDTO;
use App\Client\Application\RequestDTOValidation\GetClientByUUIDRequestDTOValidation\GetClientByUUIDRequestDTOValidationContract;

final readonly class GetClientByUUIDRequestDTOFactory implements GetClientByUUIDRequestDTOFactoryContract
{
    public function __construct(
        private GetClientByUUIDRequestDTOValidationContract $getClientByUUIDAPIRequestDTOValidation
    ) {
    }

    public function create(array $data): GetClientByUUIDRequestDTO
    {
        $this->getClientByUUIDAPIRequestDTOValidation->validate($data);
        return GetClientByUUIDRequestDTO::fromArray($data);
    }
}

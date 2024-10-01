<?php

declare(strict_types=1);

namespace App\Client\Application\Service\CreateClientService;

use App\Client\Application\Mapper\CreateClientMapper\CreateClientToDTOMapper\CreateClientToDTOMapper;
use App\Client\Application\Mapper\CreateClientMapper\CreateClientToValueObjectMapper\CreateClientToValueObjectMapper;
use App\Client\Application\RequestDTO\CreateClientRequestDTO;
use App\Client\Application\ResponseDTO\CreateClientResponseDTO;
use App\Client\Core\UseCases\Service\CreateClientServiceCase\CreateClientServiceCaseContract;

final readonly class CreateClientService implements CreateClientServiceContract
{
    public function __construct(
        private CreateClientServiceCaseContract $createClientServiceCase
    ) {
    }

    public function create(CreateClientRequestDTO $createClientRequestDTO): CreateClientResponseDTO
    {
        return CreateClientToDTOMapper::map(
            $this->createClientServiceCase->create(
                CreateClientToValueObjectMapper::map($createClientRequestDTO)->toNameValueObject(),
                CreateClientToValueObjectMapper::map($createClientRequestDTO)->toIpValueObject()
            )
        )->toResponseDTO();
    }
}

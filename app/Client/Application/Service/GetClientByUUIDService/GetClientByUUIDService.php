<?php

declare(strict_types=1);

namespace App\Client\Application\Service\GetClientByUUIDService;

use App\Client\Application\Mapper\GetClientByUUIDMapper\GetClientByUUIDToDTOMapper\GetClientByUUIDToDTOMapper;
use App\Client\Application\Mapper\GetClientByUUIDMapper\GetClientByUUIDToValueObjectMapper\GetClientByUUIDToValueObjectMapper;
use App\Client\Application\RequestDTO\GetClientByUUIDRequestDTO;
use App\Client\Application\ResponseDTO\GetClientByUUIDResponseDTO;
use App\Client\Core\UseCases\Service\GetClientByUUIDServiceCase\GetClientByUUIDServiceCaseContract;

final readonly class GetClientByUUIDService implements GetClientByUUIDServiceContract
{
    public function __construct(
        private GetClientByUUIDServiceCaseContract $getClientByUUIDServiceCase,
    ) {
    }

    public function get(GetClientByUUIDRequestDTO $getClientByUUIDRequestDTO): GetClientByUUIDResponseDTO
    {
        return GetClientByUUIDToDTOMapper::map(
            $this->getClientByUUIDServiceCase->get(
                GetClientByUUIDToValueObjectMapper::map($getClientByUUIDRequestDTO)->toUUIDValueObject()
            )
        )->toResponseDTO();
    }
}

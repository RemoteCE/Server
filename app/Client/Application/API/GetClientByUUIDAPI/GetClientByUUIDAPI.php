<?php
declare(strict_types=1);

namespace App\Client\Application\API\GetClientByUUIDAPI;

use App\Client\Application\Mapper\GetClientByUUIDMapper\GetClientByUUIDMapperContract;
use App\Client\Application\RequestDTO\GetClientByUUIDRequestDTO;
use App\Client\Application\RequestDTOValidation\RequestDTOValidationException;
use App\Client\Application\ResponseDTO\GetClientByUUIDResponseDTO;
use App\Client\Core\UseCases\API\GetClientByUUIDAPICase\GetClientByUUIDAPICaseContract;
use App\Client\Core\UseCases\API\GetClientByUUIDAPICase\GetClientByUUIDAPICaseException;
use App\Client\Core\UseCases\UseCaseException;

final readonly class GetClientByUUIDAPI implements GetClientByUUIDAPIContract
{
    public function __construct(
        private GetClientByUUIDAPICaseContract $getClientByUUIDAPICase,
        private GetClientByUUIDMapperContract $getClientByUUIDMapper,
    )
    {
    }

    public function get(string $uuid): ?GetClientByUUIDResponseDTO
    {
        try {
            return $this->getClientByUUIDMapper->toDTO(
                $this->getClientByUUIDAPICase->get(
                    $this->getClientByUUIDMapper->toVO(
                        new GetClientByUUIDRequestDTO($uuid)
                    )
                )
            );
        } catch (UseCaseException) {
            return null;
        }
    }
}

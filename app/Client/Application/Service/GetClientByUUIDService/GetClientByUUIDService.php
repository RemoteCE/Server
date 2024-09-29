<?php
declare(strict_types=1);

namespace App\Client\Application\Service\GetClientByUUIDService;

use App\Client\Application\Mapper\GetClientByUUIDMapper\GetClientByUUIDMapperContract;
use App\Client\Application\RequestDTO\GetClientByUUIDRequestDTO;
use App\Client\Application\ResponseDTO\GetClientByUUIDResponseDTO;
use App\Client\Core\UseCases\Service\GetClientByUUIDServiceCase\GetClientByUUIDServiceCaseContract;
use App\Client\Core\UseCases\UseCaseException;

final readonly class GetClientByUUIDService implements GetClientByUUIDServiceContract
{
    public function __construct(
        private GetClientByUUIDServiceCaseContract $getClientByUUIDAPICase,
        private GetClientByUUIDMapperContract      $getClientByUUIDMapper,
    )
    {
    }

    public function get(GetClientByUUIDRequestDTO $getClientByUUIDRequestDTO): ?GetClientByUUIDResponseDTO
    {
        try {
            return $this->getClientByUUIDMapper->toDTO(
                $this->getClientByUUIDAPICase->get(
                    $this->getClientByUUIDMapper->toVO($getClientByUUIDRequestDTO)
                )
            );
        } catch (UseCaseException) {
            return null;
        }
    }
}

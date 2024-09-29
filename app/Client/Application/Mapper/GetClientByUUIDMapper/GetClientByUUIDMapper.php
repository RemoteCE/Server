<?php
declare(strict_types=1);

namespace App\Client\Application\Mapper\GetClientByUUIDMapper;

use App\Client\Application\RequestDTO\GetClientByUUIDRequestDTO;
use App\Client\Application\ResponseDTO\GetClientByUUIDResponseDTO;
use App\Client\Application\ResponseDTOFactory\GetClientByUUIDResponseDTOFactory\GetClientByUUIDResponseDTOFactoryContract;
use App\Client\Core\Domain\Entity\Client\ValueObject\ClientValueObject;
use App\Client\Core\Domain\Entity\Client\ValueObject\UUIDValueObject;

final readonly class GetClientByUUIDMapper implements GetClientByUUIDMapperContract
{
    public function toVO(GetClientByUUIDRequestDTO $getClientByUUIDRequestDTO): UUIDValueObject
    {
        return new UUIDValueObject(
            $getClientByUUIDRequestDTO->getUUID()
        );
    }

    public function toDTO(ClientValueObject $clientValueObject): GetClientByUUIDResponseDTO
    {
        return new GetClientByUUIDResponseDTO(
            $clientValueObject->getId(),
            $clientValueObject->getUUID()
        );
    }
}

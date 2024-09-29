<?php
declare(strict_types=1);

namespace App\Client\Application\Mapper\GetClientByUUIDMapper;

use App\Client\Application\RequestDTO\GetClientByUUIDRequestDTO;
use App\Client\Application\ResponseDTO\GetClientByUUIDResponseDTO;
use App\Client\Application\ResponseDTOValidation\GetClientByUUIDResponseDTOValidation\GetClientByUUIDResponseDTOValidationException;
use App\Client\Core\Domain\Entity\Client\ValueObject\ClientValueObject;
use App\Client\Core\Domain\Entity\Client\ValueObject\UUIDValueObject;

interface GetClientByUUIDMapperContract
{
    public function toVO(GetClientByUUIDRequestDTO $getClientByUUIDRequestDTO): UUIDValueObject;

    /**
     * @param ClientValueObject $clientValueObject
     * @return GetClientByUUIDResponseDTO
     * @throws GetClientByUUIDResponseDTOValidationException
     */
    public function toDTO(ClientValueObject $clientValueObject): GetClientByUUIDResponseDTO;
}

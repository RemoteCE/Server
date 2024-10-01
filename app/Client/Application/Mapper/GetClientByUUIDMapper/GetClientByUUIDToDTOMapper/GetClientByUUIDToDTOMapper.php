<?php

declare(strict_types=1);

namespace App\Client\Application\Mapper\GetClientByUUIDMapper\GetClientByUUIDToDTOMapper;

use App\Client\Application\ResponseDTO\GetClientByUUIDResponseDTO;
use App\Client\Core\Domain\Entity\Client\ValueObject\GetClientByUUIDValueObject\GetClientByUUIDValueObject;
use App\Client\Core\Domain\Entity\Client\ValueObject\ValueObjectContract;

final readonly class GetClientByUUIDToDTOMapper implements GetClientByUUIDToDTOMapperContract
{
    private function __construct(private GetClientByUUIDValueObject $getClientByUUIDValueObject)
    {
    }

    /**
     * @inheritDoc
     */
    public static function map(ValueObjectContract $valueObject): self
    {
        if (!($valueObject instanceof GetClientByUUIDValueObject)) {
            throw new GetClientByUUIDToDTOMapperException($valueObject::class, GetClientByUUIDValueObject::class);
        }

        return new self($valueObject);
    }

    public function toResponseDTO(): GetClientByUUIDResponseDTO
    {
        return new GetClientByUUIDResponseDTO(
            $this->getClientByUUIDValueObject->getStatus(),
            $this->getClientByUUIDValueObject->getId(),
            $this->getClientByUUIDValueObject->getUuid(),
            $this->getClientByUUIDValueObject->getName(),
            $this->getClientByUUIDValueObject->getIp()
        );
    }
}

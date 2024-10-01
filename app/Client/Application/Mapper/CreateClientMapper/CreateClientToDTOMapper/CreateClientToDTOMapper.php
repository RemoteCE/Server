<?php

declare(strict_types=1);

namespace App\Client\Application\Mapper\CreateClientMapper\CreateClientToDTOMapper;

use App\Client\Application\ResponseDTO\CreateClientResponseDTO;
use App\Client\Core\Domain\Entity\Client\ValueObject\CreateClientValueObject\CreateClientValueObject;
use App\Client\Core\Domain\Entity\Client\ValueObject\ValueObjectContract;

final readonly class CreateClientToDTOMapper implements CreateClientToDTOMapperContract
{
    private function __construct(private CreateClientValueObject $createClientValueObject)
    {
    }

    public static function map(ValueObjectContract $valueObject): self
    {
        if (!($valueObject instanceof CreateClientValueObject)) {
            throw new CreateClientToDTOMapperException($valueObject::class, CreateClientValueObject::class);
        }

        return new self($valueObject);
    }

    public function toResponseDTO(): CreateClientResponseDTO
    {
        return new CreateClientResponseDTO(
            $this->createClientValueObject->getStatus(),
            $this->createClientValueObject->getUuid(),
        );
    }


}

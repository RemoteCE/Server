<?php

declare(strict_types=1);

namespace App\Command\Application\Mapper\CreateCommandMapper\CreateCommandToDTOMapper;

use App\Command\Application\ResponseDTO\CreateCommandResponseDTO;
use App\Command\Core\Domain\Entity\Command\ValueObject\StatusValueObject;
use App\Command\Core\Domain\Entity\Command\ValueObject\ValueObjectContract;

final readonly class CreateCommandToDTOMapper implements CreateCommandToDTOMapperContract
{
    private function __construct(
        private StatusValueObject $statusValueObject
    ) {
    }
    
    public static function map(ValueObjectContract $valueObject): self
    {
        if (!($valueObject instanceof StatusValueObject)) {
            throw new CreateCommandToDTOMapperException($valueObject::class, ValueObjectContract::class);
        }

        return new self($valueObject);
    }

    public function toResponseDTO(): CreateCommandResponseDTO
    {
        return new CreateCommandResponseDTO(
            $this->statusValueObject->getStatus()
        );
    }

}

<?php

declare(strict_types=1);

namespace App\Command\Application\Mapper\UpdateCommandByClientIdMapper\UpdateCommandByClientIdToDTOMapper;

use App\Command\Application\ResponseDTO\UpdateCommandByClientIdResponseDTO;
use App\Command\Core\Domain\Entity\Command\ValueObject\StatusValueObject;
use App\Command\Core\Domain\Entity\ValueObjectContract;

final readonly class UpdateCommandByClientIdToDTOMapper implements UpdateCommandByClientIdToDTOMapperContract
{
    private function __construct(
        private StatusValueObject $valueObject
    ) {
    }

    public static function map(ValueObjectContract $valueObject): self
    {
        if (!($valueObject instanceof StatusValueObject)) {
            throw new UpdateCommandByClientIdToDTOMapperException($valueObject::class, StatusValueObject::class);
        }

        return new self($valueObject);
    }

    public function toResponseDTO(): UpdateCommandByClientIdResponseDTO
    {
        return new UpdateCommandByClientIdResponseDTO(
            $this->valueObject->getStatus()
        );
    }
}

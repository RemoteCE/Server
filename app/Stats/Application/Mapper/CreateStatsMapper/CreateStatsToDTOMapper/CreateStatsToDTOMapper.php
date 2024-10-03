<?php

declare(strict_types=1);

namespace App\Stats\Application\Mapper\CreateStatsMapper\CreateStatsToDTOMapper;

use App\Stats\Application\ResponseDTO\CreateStatsResponseDTO;
use App\Stats\Core\Domain\Entity\Stats\ValueObject\StatusValueObject;
use App\Stats\Core\Domain\Entity\ValueObjectContract;

final readonly class CreateStatsToDTOMapper implements CreateStatsToDTOMapperContract
{
    private function __construct(
        private StatusValueObject $valueObject
    ) {
    }

    public static function map(ValueObjectContract $valueObject): self
    {
        if (!($valueObject instanceof StatusValueObject)) {
            throw new CreateStatsToDTOMapperException($valueObject::class, StatusValueObject::class);
        }

        return new self($valueObject);
    }

    public function toResponseDTO(): CreateStatsResponseDTO
    {
        return new CreateStatsResponseDTO(
            $this->valueObject->getStatus()
        );
    }
}

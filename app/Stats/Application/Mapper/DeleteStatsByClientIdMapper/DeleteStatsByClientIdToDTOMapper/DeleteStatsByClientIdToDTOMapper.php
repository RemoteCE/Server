<?php

declare(strict_types=1);

namespace App\Stats\Application\Mapper\DeleteStatsByClientIdMapper\DeleteStatsByClientIdToDTOMapper;

use App\Stats\Application\ResponseDTO\DeleteStatsByClientIdResponseDTO;
use App\Stats\Core\Domain\Entity\Stats\ValueObject\StatusValueObject;
use App\Stats\Core\Domain\Entity\ValueObjectContract;

final readonly class DeleteStatsByClientIdToDTOMapper implements DeleteStatsByClientIdToDTOMapperContract
{
    private function __construct(
        private StatusValueObject $valueObject
    ) {
    }

    public static function map(ValueObjectContract $valueObject): self
    {
        if (!($valueObject instanceof StatusValueObject)) {
            throw new DeleteStatsByClientIdToDTOMapperException($valueObject::class, StatusValueObject::class);
        }

        return new self($valueObject);
    }

    public function toResponseDTO(): DeleteStatsByClientIdResponseDTO
    {
        return new DeleteStatsByClientIdResponseDTO(
            $this->valueObject->getStatus()
        );
    }
}

<?php

declare(strict_types=1);

namespace App\Command\Application\Mapper\DeleteCommandMapper\DeleteCommandByClientIdToDTOMapper;

use App\Command\Application\ResponseDTO\DeleteCommandByClientIdResponseDTO;
use App\Command\Core\Domain\Entity\Command\ValueObject\StatusValueObject;
use App\Command\Core\Domain\Entity\ValueObjectContract;

final readonly class DeleteCommandByClientIdToDTOMapper implements DeleteCommandByClientIdToDTOMapperContract
{
    private function __construct(
        private StatusValueObject $statusValueObject
    ) {
    }

    public static function map(ValueObjectContract $valueObject): self
    {
        if (!($valueObject instanceof StatusValueObject)) {
            throw new DeleteCommandByClientIdToDTOMapperException($valueObject::class, ValueObjectContract::class);
        }

        return new self($valueObject);
    }

    public function toResponseDTO(): DeleteCommandByClientIdResponseDTO
    {
        return new DeleteCommandByClientIdResponseDTO(
            $this->statusValueObject->getStatus()
        );
    }

}

<?php

declare(strict_types=1);

namespace App\Stats\Application\Mapper\DeleteStatsByClientIdMapper\DeleteStatsByClientIdToValueObjectMapper;

use App\Stats\Application\RequestDTO\DeleteStatsByClientIdRequestDTO;
use App\Stats\Application\RequestDTO\RequestDTOContract;
use App\Stats\Core\Domain\Entity\Stats\ValueObject\ClientIdValueObject;

final readonly class DeleteStatsByClientIdToValueObjectMapper implements
    DeleteStatsByClientIdToValueObjectMapperContract
{
    private function __construct(private DeleteStatsByClientIdRequestDTO $RequestDTO)
    {
    }

    public static function map(RequestDTOContract $requestDTO): self
    {
        if (!($requestDTO instanceof DeleteStatsByClientIdRequestDTO)) {
            throw new DeleteStatsByClientIdToValueObjectMapperException(
                $requestDTO::class,
                DeleteStatsByClientIdRequestDTO::class
            );
        }

        return new self($requestDTO);
    }

    public function toClientIdValueObject(): ClientIdValueObject
    {
        return new ClientIdValueObject(
            $this->RequestDTO->getClientId(),
        );
    }
}

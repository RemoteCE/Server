<?php

declare(strict_types=1);

namespace App\Stats\Application\Mapper\CreateStatsMapper\CreateStatsToValueObjectMapper;

use App\Stats\Application\RequestDTO\CreateStatsRequestDTO;
use App\Stats\Application\RequestDTO\RequestDTOContract;
use App\Stats\Core\Domain\Entity\Stats\ValueObject\ClientIdValueObject;

final readonly class CreateStatsToValueObjectMapper implements CreateStatsToValueObjectMapperContract
{
    private function __construct(private CreateStatsRequestDTO $RequestDTO)
    {
    }

    public static function map(RequestDTOContract $requestDTO): self
    {
        if (!($requestDTO instanceof CreateStatsRequestDTO)) {
            throw new CreateStatsToValueObjectMapperException(
                $requestDTO::class,
                CreateStatsRequestDTO::class
            );
        }

        return new self($requestDTO);
    }

    public function toClientIdValueObject(): ClientIdValueObject
    {
        return new ClientIdValueObject(
            $this->RequestDTO->getClientId()
        );
    }
}

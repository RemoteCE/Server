<?php

declare(strict_types=1);

namespace App\Command\Application\Mapper\CreateCommandMapper\CreateCommandToValueObjectMapper;

use App\Command\Application\RequestDTO\CreateCommandRequestDTO;
use App\Command\Application\RequestDTO\RequestDTOContract;
use App\Command\Core\Domain\Entity\Command\ValueObject\ClientIdValueObject;

final readonly class CreateCommandToValueObjectMapper implements CreateCommandToValueObjectMapperContract
{
    private function __construct(private CreateCommandRequestDTO $createCommandRequestDTO)
    {
    }

    
    public static function map(RequestDTOContract $requestDTO): self
    {
        if (!($requestDTO instanceof CreateCommandRequestDTO)) {
            throw new CreateCommandToValueObjectMapperException($requestDTO::class, CreateCommandRequestDTO::class);
        }

        return new self($requestDTO);
    }

    public function toClientId(): ClientIdValueObject
    {
        return new ClientIdValueObject(
            $this->createCommandRequestDTO->getClientId()
        );
    }

}

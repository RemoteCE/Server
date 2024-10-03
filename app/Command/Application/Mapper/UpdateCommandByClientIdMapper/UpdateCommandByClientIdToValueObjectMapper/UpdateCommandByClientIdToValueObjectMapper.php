<?php

declare(strict_types=1);

namespace App\Command\Application\Mapper\UpdateCommandByClientIdMapper\UpdateCommandByClientIdToValueObjectMapper;

use App\Command\Application\RequestDTO\RequestDTOContract;
use App\Command\Application\RequestDTO\UpdateCommandByClientIdRequestDTO;
use App\Command\Core\Domain\Entity\Command\ValueObject\ClientIdValueObject;
use App\Command\Core\Domain\Entity\Command\ValueObject\CommandValueObject;

final readonly class UpdateCommandByClientIdToValueObjectMapper implements
    UpdateCommandByClientIdToValueObjectMapperContract
{
    private function __construct(private UpdateCommandByClientIdRequestDTO $RequestDTO)
    {
    }

    public static function map(RequestDTOContract $requestDTO): self
    {
        if (!($requestDTO instanceof UpdateCommandByClientIdRequestDTO)) {
            throw new UpdateCommandByClientIdToValueObjectMapperException(
                $requestDTO::class,
                UpdateCommandByClientIdRequestDTO::class
            );
        }

        return new self($requestDTO);
    }

    public function toCommandValueObject(): CommandValueObject
    {
        return new CommandValueObject(
            null,
            $this->RequestDTO->getClientId(),
            $this->RequestDTO->getCommand(),
            $this->RequestDTO->getResponse()
        );
    }

    public function toClientIdValueObject(): ClientIdValueObject
    {
        return new ClientIdValueObject(
            $this->RequestDTO->getNewClientId()
        );
    }
}

<?php

declare(strict_types=1);

namespace App\Command\Application\Mapper\DeleteCommandMapper\DeleteCommandByClientIdToValueObjectMapper;

use App\Command\Application\RequestDTO\CreateCommandRequestDTO;
use App\Command\Application\RequestDTO\RequestDTOContract;
use App\Command\Core\Domain\Entity\Command\ValueObject\ClientIdValueObject;

final readonly class DeleteCommandByClientIdToValueObjectMapper implements
    DeleteCommandByClientIdToValueObjectMapperContract
{
    private function __construct(private CreateCommandRequestDTO $createCommandRequestDTO)
    {
    }


    public static function map(RequestDTOContract $requestDTO): self
    {
        if (!($requestDTO instanceof CreateCommandRequestDTO)) {
            throw new DeleteCommandByClientIdToValueObjectMapperException(
                $requestDTO::class,
                CreateCommandRequestDTO::class
            );
        }

        return new self($requestDTO);
    }

    public function toClientIdValueObject()
    {
        return new ClientIdValueObject(
            $this->createCommandRequestDTO->getClientId()
        );
    }

}

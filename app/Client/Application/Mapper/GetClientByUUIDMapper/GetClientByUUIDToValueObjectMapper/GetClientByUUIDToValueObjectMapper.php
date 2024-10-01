<?php

declare(strict_types=1);

namespace App\Client\Application\Mapper\GetClientByUUIDMapper\GetClientByUUIDToValueObjectMapper;

use App\Client\Application\Mapper\CreateClientMapper\CreateClientToValueObjectMapper\CreateClientToValueObjectMapperException;
use App\Client\Application\RequestDTO\GetClientByUUIDRequestDTO;
use App\Client\Application\RequestDTO\RequestDTOContract;
use App\Client\Core\Domain\Entity\Client\ValueObject\UUIDValueObject;

final readonly class GetClientByUUIDToValueObjectMapper implements GetClientByUUIDToValueObjectMapperContract
{
    private function __construct(private GetClientByUUIDRequestDTO $getClientByUUIDRequestDTO)
    {
    }

    public static function map(RequestDTOContract $requestDTO): self
    {
        if (!($requestDTO instanceof GetClientByUUIDRequestDTO)) {
            throw new CreateClientToValueObjectMapperException($requestDTO::class, GetClientByUUIDRequestDTO::class);
        }
        return new self($requestDTO);
    }

    public function toUUIDValueObject(): UUIDValueObject
    {
        return new UUIDValueObject(
            $this->getClientByUUIDRequestDTO->getUuid()
        );
    }


}

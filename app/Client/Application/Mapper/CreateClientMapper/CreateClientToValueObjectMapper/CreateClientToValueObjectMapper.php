<?php

declare(strict_types=1);

namespace App\Client\Application\Mapper\CreateClientMapper\CreateClientToValueObjectMapper;

use App\Client\Application\Mapper\ToValueObjectAbstractMapper;
use App\Client\Application\Mapper\ToValueObjectMapperContract;
use App\Client\Application\RequestDTO\CreateClientRequestDTO;
use App\Client\Application\RequestDTO\RequestDTOContract;
use App\Client\Core\Domain\Entity\Client\ValueObject\IpValueObject;
use App\Client\Core\Domain\Entity\Client\ValueObject\NameValueObject;

final readonly class CreateClientToValueObjectMapper implements ToValueObjectMapperContract
{
    private function __construct(private CreateClientRequestDTO $createClientRequestDTO)
    {
    }

    public static function map(RequestDTOContract $requestDTO): self
    {
        if (!($requestDTO instanceof CreateClientRequestDTO)) {
            throw new CreateClientToValueObjectMapperException($requestDTO::class, CreateClientRequestDTO::class);
        }
        return new self($requestDTO);
    }


    public function toNameValueObject(): NameValueObject
    {
        return new NameValueObject(
            $this->createClientRequestDTO->getName(),
        );
    }

    public function toIpValueObject(): IpValueObject
    {
        return new IpValueObject(
            $this->createClientRequestDTO->getIp(),
        );
    }

}

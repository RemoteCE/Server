<?php
declare(strict_types=1);

namespace App\Client\Application\Mapper\CreateClientMapper;

use App\Client\Application\Mapper\CreateClientMapper\CreateClientMapperContract;
use App\Client\Application\RequestDTO\CreateClientRequestDTO;
use App\Client\Core\Domain\Entity\Client\ValueObject\UUIDValueObject;

class CreateClientMapper implements CreateClientMapperContract
{

    public function toVO(CreateClientRequestDTO $createClientRequestDTO): UUIDValueObject
    {
        return new UUIDValueObject(
            $createClientRequestDTO->getUuid()
        );
    }
}

<?php

declare(strict_types=1);

namespace App\Client\Application\Mapper\GetClientByUUIDMapper\GetClientByUUIDToValueObjectMapper;

use App\Client\Core\Domain\Entity\Client\ValueObject\UUIDValueObject;

interface GetClientByUUIDToValueObjectMapperContract
{
    public function toUUIDValueObject(): UUIDValueObject;
}

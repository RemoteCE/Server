<?php

declare(strict_types=1);

namespace App\Client\Application\Mapper\GetClientByUUIDMapper\GetClientByUUIDToDTOMapper;

use App\Client\Application\Mapper\GetClientByUUIDMapper\GetClientByUUIDMapperException;

final class GetClientByUUIDToDTOMapperException extends GetClientByUUIDMapperException
{
    public function __construct(string $ValueObject, string $expectedValueObject)
    {
        parent::__construct("Invalid ValueObject {$ValueObject}, expected {$expectedValueObject}");
    }
}

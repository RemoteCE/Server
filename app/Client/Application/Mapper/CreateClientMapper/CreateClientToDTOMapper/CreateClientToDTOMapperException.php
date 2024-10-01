<?php

declare(strict_types=1);

namespace App\Client\Application\Mapper\CreateClientMapper\CreateClientToDTOMapper;

use App\Client\Application\Mapper\CreateClientMapper\CreateClientMapperException;

final class CreateClientToDTOMapperException extends CreateClientMapperException
{
    public function __construct(string $ValueObject, string $expectedValueObject)
    {
        parent::__construct("Invalid ValueObject {$ValueObject}, expected {$expectedValueObject}");
    }
}

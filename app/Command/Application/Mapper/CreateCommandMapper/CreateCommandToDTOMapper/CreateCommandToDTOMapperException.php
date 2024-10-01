<?php

declare(strict_types=1);

namespace App\Command\Application\Mapper\CreateCommandMapper\CreateCommandToDTOMapper;

use App\Command\Application\Mapper\CreateCommandMapper\CreateCommandMapperException;

final class CreateCommandToDTOMapperException extends CreateCommandMapperException
{
    public function __construct(string $ValueObject, string $expectedValueObject)
    {
        parent::__construct("Invalid ValueObject {$ValueObject}, expected {$expectedValueObject}");
    }
}

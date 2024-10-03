<?php

declare(strict_types=1);

namespace App\Command\Application\Mapper\UpdateCommandByClientIdMapper\UpdateCommandByClientIdToDTOMapper;

use App\Command\Application\Mapper\UpdateCommandByClientIdMapper\UpdateCommandByClientIdMapperException;

final class UpdateCommandByClientIdToDTOMapperException extends UpdateCommandByClientIdMapperException
{
    public function __construct(string $valueObject, string $expectedValueObject)
    {
        parent::__construct("Invalid ValueObject {$valueObject}, expected {$expectedValueObject}");
    }
}

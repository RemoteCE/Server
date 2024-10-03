<?php

declare(strict_types=1);

namespace App\Stats\Application\Mapper\DeleteStatsByClientIdMapper\DeleteStatsByClientIdToDTOMapper;

use App\Stats\Application\Mapper\DeleteStatsByClientIdMapper\DeleteStatsByClientIdMapperException;

final class DeleteStatsByClientIdToDTOMapperException extends DeleteStatsByClientIdMapperException
{
    public function __construct(string $valueObject, string $expectedValueObject)
    {
        parent::__construct("Invalid ValueObject {$valueObject}, expected {$expectedValueObject}");
    }
}

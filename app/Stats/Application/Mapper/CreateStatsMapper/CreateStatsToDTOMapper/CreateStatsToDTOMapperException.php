<?php

declare(strict_types=1);

namespace App\Stats\Application\Mapper\CreateStatsMapper\CreateStatsToDTOMapper;

use App\Stats\Application\Mapper\CreateStatsMapper\CreateStatsMapperException;

final class CreateStatsToDTOMapperException extends CreateStatsMapperException
{
    public function __construct(string $valueObject, string $expectedValueObject)
    {
        parent::__construct("Invalid ValueObject {$valueObject}, expected {$expectedValueObject}");
    }
}

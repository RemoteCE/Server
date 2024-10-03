<?php

declare(strict_types=1);

namespace App\Stats\Application\Mapper\CreateStatsMapper\CreateStatsToValueObjectMapper;

use App\Stats\Application\Mapper\CreateStatsMapper\CreateStatsMapperException;

class CreateStatsToValueObjectMapperException extends CreateStatsMapperException
{
    public function __construct(string $DTO, string $expectedDTO)
    {
        parent::__construct("Invalid DTO {$DTO}, expected {$expectedDTO}");
    }
}

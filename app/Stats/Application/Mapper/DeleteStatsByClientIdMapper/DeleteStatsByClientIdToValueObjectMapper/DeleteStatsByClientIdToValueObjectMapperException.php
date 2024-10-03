<?php

declare(strict_types=1);

namespace App\Stats\Application\Mapper\DeleteStatsByClientIdMapper\DeleteStatsByClientIdToValueObjectMapper;

use App\Stats\Application\Mapper\DeleteStatsByClientIdMapper\DeleteStatsByClientIdMapperException;

class DeleteStatsByClientIdToValueObjectMapperException extends DeleteStatsByClientIdMapperException
{
    public function __construct(string $DTO, string $expectedDTO)
    {
        parent::__construct("Invalid DTO {$DTO}, expected {$expectedDTO}");
    }
}

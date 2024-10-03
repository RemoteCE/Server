<?php

declare(strict_types=1);

namespace App\Command\Application\Mapper\UpdateCommandByClientIdMapper\UpdateCommandByClientIdToValueObjectMapper;

use App\Command\Application\Mapper\UpdateCommandByClientIdMapper\UpdateCommandByClientIdMapperException;

class UpdateCommandByClientIdToValueObjectMapperException extends UpdateCommandByClientIdMapperException
{
    public function __construct(string $DTO, string $expectedDTO)
    {
        parent::__construct("Invalid DTO {$DTO}, expected {$expectedDTO}");
    }
}

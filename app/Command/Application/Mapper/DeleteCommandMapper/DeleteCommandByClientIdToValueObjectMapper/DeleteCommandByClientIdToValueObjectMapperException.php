<?php

declare(strict_types=1);

namespace App\Command\Application\Mapper\DeleteCommandMapper\DeleteCommandByClientIdToValueObjectMapper;

use App\Command\Application\Mapper\DeleteCommandMapper\DeleteCommandByClientIdMapperException;

class DeleteCommandByClientIdToValueObjectMapperException extends DeleteCommandByClientIdMapperException
{
    public function __construct(string $DTO, string $expectedDTO)
    {
        parent::__construct("Invalid DTO {$DTO}, expected {$expectedDTO}");
    }
}

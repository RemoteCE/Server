<?php

declare(strict_types=1);

namespace App\Command\Application\Mapper\CreateCommandMapper\CreateCommandToValueObjectMapper;

use App\Command\Application\Mapper\CreateCommandMapper\CreateCommandMapperException;

class CreateCommandToValueObjectMapperException extends CreateCommandMapperException
{
    public function __construct(string $DTO, string $expectedDTO)
    {
        parent::__construct("Invalid DTO {$DTO}, expected {$expectedDTO}");
    }
}

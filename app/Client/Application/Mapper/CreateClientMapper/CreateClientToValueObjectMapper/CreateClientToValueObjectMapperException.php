<?php

declare(strict_types=1);

namespace App\Client\Application\Mapper\CreateClientMapper\CreateClientToValueObjectMapper;

use App\Client\Application\Mapper\CreateClientMapper\CreateClientMapperException;

final class CreateClientToValueObjectMapperException extends CreateClientMapperException
{
    public function __construct(string $DTO, string $expectedDTO)
    {
        parent::__construct("Invalid DTO {$DTO}, expected {$expectedDTO}");
    }
}

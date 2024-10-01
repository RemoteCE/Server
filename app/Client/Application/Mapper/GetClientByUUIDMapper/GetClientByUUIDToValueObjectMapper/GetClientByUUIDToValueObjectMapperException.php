<?php

declare(strict_types=1);

namespace App\Client\Application\Mapper\GetClientByUUIDMapper\GetClientByUUIDToValueObjectMapper;

use App\Client\Application\Mapper\GetClientByUUIDMapper\GetClientByUUIDMapperException;

final class GetClientByUUIDToValueObjectMapperException extends GetClientByUUIDMapperException
{
    public function __construct(string $DTO, string $expectedDTO)
    {
        parent::__construct("Invalid DTO {$DTO}, expected {$expectedDTO}");
    }
}

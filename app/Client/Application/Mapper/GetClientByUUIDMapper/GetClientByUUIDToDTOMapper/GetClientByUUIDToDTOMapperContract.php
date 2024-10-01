<?php

declare(strict_types=1);

namespace App\Client\Application\Mapper\GetClientByUUIDMapper\GetClientByUUIDToDTOMapper;

use App\Client\Application\Mapper\ToDTOMapperContract;
use App\Client\Application\ResponseDTO\GetClientByUUIDResponseDTO;

interface GetClientByUUIDToDTOMapperContract extends ToDTOMapperContract
{
    public function toResponseDTO(): GetClientByUUIDResponseDTO;
}

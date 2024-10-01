<?php

declare(strict_types=1);

namespace App\Client\Application\Mapper\CreateClientMapper\CreateClientToDTOMapper;

use App\Client\Application\Mapper\ToDTOMapperContract;
use App\Client\Application\ResponseDTO\CreateClientResponseDTO;

interface CreateClientToDTOMapperContract extends ToDTOMapperContract
{
    public function toResponseDTO(): CreateClientResponseDTO;
}

<?php

declare(strict_types=1);

namespace App\Command\Application\Mapper\CreateCommandMapper\CreateCommandToDTOMapper;

use App\Command\Application\Mapper\ToDTOMapperContract;
use App\Command\Application\ResponseDTO\CreateCommandResponseDTO;

interface CreateCommandToDTOMapperContract extends ToDTOMapperContract
{
    
    public function toResponseDTO(): CreateCommandResponseDTO;
}

<?php

declare(strict_types=1);

namespace App\Command\Application\Mapper\DeleteCommandMapper\DeleteCommandByClientIdToDTOMapper;

use App\Command\Application\Mapper\ToDTOMapperContract;
use App\Command\Application\ResponseDTO\DeleteCommandByClientIdResponseDTO;

interface DeleteCommandByClientIdToDTOMapperContract extends ToDTOMapperContract
{
    public function toResponseDTO(): DeleteCommandByClientIdResponseDTO;
}

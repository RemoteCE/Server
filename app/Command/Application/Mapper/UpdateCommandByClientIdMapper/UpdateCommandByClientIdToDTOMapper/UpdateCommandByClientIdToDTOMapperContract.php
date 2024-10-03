<?php

declare(strict_types=1);

namespace App\Command\Application\Mapper\UpdateCommandByClientIdMapper\UpdateCommandByClientIdToDTOMapper;

use App\Command\Application\Mapper\ToDTOMapperContract;
use App\Command\Application\ResponseDTO\UpdateCommandByClientIdResponseDTO;

interface UpdateCommandByClientIdToDTOMapperContract extends ToDTOMapperContract
{
    public function toResponseDTO(): UpdateCommandByClientIdResponseDTO;
}

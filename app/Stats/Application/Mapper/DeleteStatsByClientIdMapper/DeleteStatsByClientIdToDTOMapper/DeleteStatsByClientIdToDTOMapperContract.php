<?php

declare(strict_types=1);

namespace App\Stats\Application\Mapper\DeleteStatsByClientIdMapper\DeleteStatsByClientIdToDTOMapper;

use App\Stats\Application\Mapper\ToDTOMapperContract;
use App\Stats\Application\ResponseDTO\DeleteStatsByClientIdResponseDTO;

interface DeleteStatsByClientIdToDTOMapperContract extends ToDTOMapperContract
{
    public function toResponseDTO(): DeleteStatsByClientIdResponseDTO;
}

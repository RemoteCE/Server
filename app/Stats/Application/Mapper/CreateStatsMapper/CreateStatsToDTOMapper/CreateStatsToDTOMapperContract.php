<?php

declare(strict_types=1);

namespace App\Stats\Application\Mapper\CreateStatsMapper\CreateStatsToDTOMapper;

use App\Stats\Application\Mapper\ToDTOMapperContract;
use App\Stats\Application\ResponseDTO\CreateStatsResponseDTO;

interface CreateStatsToDTOMapperContract extends ToDTOMapperContract
{
    public function toResponseDTO(): CreateStatsResponseDTO;
}

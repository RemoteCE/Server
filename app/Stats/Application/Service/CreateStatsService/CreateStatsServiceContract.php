<?php

declare(strict_types=1);

namespace App\Stats\Application\Service\CreateStatsService;

use App\Stats\Application\RequestDTO\CreateStatsRequestDTO;
use App\Stats\Application\ResponseDTO\CreateStatsResponseDTO;

interface CreateStatsServiceContract
{
    /**
     * @param CreateStatsRequestDTO $createStatsRequestDTO
     * @return CreateStatsResponseDTO
     */
    public function create(CreateStatsRequestDTO $createStatsRequestDTO): CreateStatsResponseDTO;
}

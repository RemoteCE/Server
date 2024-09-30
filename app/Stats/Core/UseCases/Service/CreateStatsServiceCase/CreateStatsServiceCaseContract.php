<?php
declare(strict_types=1);

namespace App\Stats\Core\UseCases\Service\CreateStatsServiceCase;

use App\Stats\Application\RequestDTO\CreateStatsRequestDTO;

interface CreateStatsServiceCaseContract
{
    /**
     * @param CreateStatsRequestDTO $createStatsRequestDTO
     * @return void
     */
    public function create(CreateStatsRequestDTO $createStatsRequestDTO): void;
}

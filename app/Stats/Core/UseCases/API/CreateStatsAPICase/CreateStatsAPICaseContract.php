<?php
declare(strict_types=1);

namespace App\Stats\Core\UseCases\API\CreateStatsAPICase;

use App\Stats\Application\RequestDTO\CreateStatsRequestDTO;

interface CreateStatsAPICaseContract
{
    public function create(CreateStatsRequestDTO $createStatsRequestDTO): void;
}

<?php
declare(strict_types=1);

namespace App\Stats\Application\Contracts\UseCases;

use App\Stats\Application\RequestDTO\CreateStatsRequestDTO;

interface CreateStatsCaseContract
{
    public function create(CreateStatsRequestDTO $createStatsRequestDTO): void;
}

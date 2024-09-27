<?php
declare(strict_types=1);

namespace App\Stats\Core\Contracts\Database\Repository;

use App\Stats\Core\Domain\Entity\Stats\Stats;

interface StatsRepositoryContract
{
    public function create(Stats $stats): void;
}

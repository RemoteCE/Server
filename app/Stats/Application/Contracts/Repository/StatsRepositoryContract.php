<?php
declare(strict_types=1);

namespace App\Stats\Application\Contracts\Repository;

use App\Stats\Core\Domain\Entity\Stats\Stats;

interface StatsRepositoryContract
{
    public function create(Stats $stats): void;
}

<?php
declare(strict_types=1);

namespace App\Stats\Core\Domain\Entity\Stats;

use App\Stats\Core\Domain\Entity\EntityNotFoundException;

class StatsNotFoundException extends EntityNotFoundException
{
    public function __construct()
    {
        parent::__construct(Stats::class);
    }
}

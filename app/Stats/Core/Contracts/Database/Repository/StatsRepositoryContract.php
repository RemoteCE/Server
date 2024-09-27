<?php
declare(strict_types=1);

namespace App\Stats\Core\Contracts\Database\Repository;

use App\Stats\Core\Domain\Entity\Stats\Stats;

interface StatsRepositoryContract
{
    /**
     * @param Stats $stats
     * @return void
     */
    public function create(Stats $stats): void;

    /**
     * @param int $clientId
     * @return void
     */
    public function deleteByClientId(int $clientId): void;
}

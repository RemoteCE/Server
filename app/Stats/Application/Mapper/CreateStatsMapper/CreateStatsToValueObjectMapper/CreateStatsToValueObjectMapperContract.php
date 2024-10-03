<?php

declare(strict_types=1);

namespace App\Stats\Application\Mapper\CreateStatsMapper\CreateStatsToValueObjectMapper;

use App\Stats\Application\Mapper\ToValueObjectMapperContract;
use App\Stats\Core\Domain\Entity\Stats\ValueObject\ClientIdValueObject;

interface CreateStatsToValueObjectMapperContract extends ToValueObjectMapperContract
{
    public function toClientIdValueObject(): ClientIdValueObject;
}

<?php

declare(strict_types=1);

namespace App\Stats\Application\Mapper\DeleteStatsByClientIdMapper\DeleteStatsByClientIdToValueObjectMapper;

use App\Stats\Application\Mapper\ToValueObjectMapperContract;
use App\Stats\Core\Domain\Entity\Stats\ValueObject\ClientIdValueObject;

interface DeleteStatsByClientIdToValueObjectMapperContract extends ToValueObjectMapperContract
{
    public function toClientIdValueObject(): ClientIdValueObject;
}

<?php

declare(strict_types=1);

namespace App\Command\Application\Mapper\CreateCommandMapper\CreateCommandToValueObjectMapper;

use App\Command\Application\Mapper\ToValueObjectMapperContract;
use App\Command\Core\Domain\Entity\Command\ValueObject\ClientIdValueObject;

interface CreateCommandToValueObjectMapperContract extends ToValueObjectMapperContract
{
    public function toClientId(): ClientIdValueObject;
}

<?php

declare(strict_types=1);

namespace App\Command\Application\Mapper\UpdateCommandByClientIdMapper\UpdateCommandByClientIdToValueObjectMapper;

use App\Command\Application\Mapper\ToValueObjectMapperContract;
use App\Command\Core\Domain\Entity\Command\ValueObject\ClientIdValueObject;
use App\Command\Core\Domain\Entity\Command\ValueObject\CommandValueObject;

interface UpdateCommandByClientIdToValueObjectMapperContract extends ToValueObjectMapperContract
{
    public function toCommandValueObject(): CommandValueObject;

    public function toClientIdValueObject(): ClientIdValueObject;
}

<?php

declare(strict_types=1);

namespace App\Command\Application\Mapper\DeleteCommandMapper\DeleteCommandByClientIdToValueObjectMapper;

use App\Command\Application\Mapper\ToValueObjectMapperContract;

interface DeleteCommandByClientIdToValueObjectMapperContract extends ToValueObjectMapperContract
{
    public function toClientIdValueObject();
}

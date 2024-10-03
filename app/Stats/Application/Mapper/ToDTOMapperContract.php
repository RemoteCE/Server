<?php

declare(strict_types=1);

namespace App\Stats\Application\Mapper;

use App\Stats\Core\Domain\Entity\ValueObjectContract;

interface ToDTOMapperContract
{
    /**
     * @throws MapperException
     */
    public static function map(ValueObjectContract $valueObject): self;
}

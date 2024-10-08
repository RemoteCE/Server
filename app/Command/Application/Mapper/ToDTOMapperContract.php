<?php

declare(strict_types=1);

namespace App\Command\Application\Mapper;

use App\Command\Core\Domain\Entity\ValueObjectContract;

interface ToDTOMapperContract
{
    /**
     * @throws MapperException
     */
    public static function map(ValueObjectContract $valueObject): self;
}

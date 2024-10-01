<?php

declare(strict_types=1);

namespace App\Client\Application\Mapper;

use App\Client\Core\Domain\Entity\Client\ValueObject\ValueObjectContract;

interface ToDTOMapperContract
{
    /**
     * @throws MapperException
     */
    public static function map(ValueObjectContract $valueObject): self;
}

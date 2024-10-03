<?php

declare(strict_types=1);

namespace App\Stats\Application\Mapper;

use App\Stats\Application\RequestDTO\RequestDTOContract;

interface ToValueObjectMapperContract
{
    /**
     * @throws MapperException
     */
    public static function map(RequestDTOContract $requestDTO): self;
}

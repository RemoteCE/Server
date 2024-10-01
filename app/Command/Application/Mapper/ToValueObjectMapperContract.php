<?php

declare(strict_types=1);

namespace App\Command\Application\Mapper;

use App\Command\Application\RequestDTO\RequestDTOContract;

interface ToValueObjectMapperContract
{
    /**
     * @throws MapperException
     */
    public static function map(RequestDTOContract $requestDTO): self;
}

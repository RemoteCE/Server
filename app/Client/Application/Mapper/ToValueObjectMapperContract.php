<?php

declare(strict_types=1);

namespace App\Client\Application\Mapper;

use App\Client\Application\RequestDTO\RequestDTOContract;

interface ToValueObjectMapperContract
{
    /**
     * @throws MapperException
     */
    public static function map(RequestDTOContract $requestDTO): self;
}

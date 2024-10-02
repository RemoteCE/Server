<?php

declare(strict_types=1);

namespace App\Command\Application\Mapper\DeleteCommandMapper\DeleteCommandByClientIdToDTOMapper;

use App\Command\Application\Mapper\DeleteCommandMapper\DeleteCommandByClientIdMapperException;

final class DeleteCommandByClientIdToDTOMapperException extends DeleteCommandByClientIdMapperException
{
    public function __construct(string $ValueObject, string $expectedValueObject)
    {
        parent::__construct("Invalid ValueObject {$ValueObject}, expected {$expectedValueObject}");
    }
}

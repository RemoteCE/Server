<?php
declare(strict_types=1);

namespace App\Client\Core\Domain\Entity;

use App\Client\Core\Domain\DomainException;

class EntityNotFoundException extends DomainException
{
    public function __construct(string $entityName)
    {
        parent::__construct("Entity '{$entityName}' not found");
    }
}

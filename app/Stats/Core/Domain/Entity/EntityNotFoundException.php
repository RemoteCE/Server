<?php
declare(strict_types=1);

namespace App\Stats\Core\Domain\Entity;

use App\Stats\Core\Domain\DomainException;

class EntityNotFoundException extends DomainException
{
    public function __construct(string $entityName){
        parent::__construct("Entity '{$entityName}' not found");
    }
}

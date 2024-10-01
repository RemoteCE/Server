<?php

declare(strict_types=1);

namespace App\Command\Core\UseCases\Service\CreateCommandServiceCase;

use App\Command\Core\Domain\Entity\Command\ValueObject\ClientIdValueObject;
use App\Command\Core\Domain\Entity\Command\ValueObject\StatusValueObject;

interface CreateCommandServiceCaseContract
{
    /**
     * @param ClientIdValueObject $clientIdValueObject
     * @return StatusValueObject
     */
    public function create(ClientIdValueObject $clientIdValueObject): StatusValueObject;
}

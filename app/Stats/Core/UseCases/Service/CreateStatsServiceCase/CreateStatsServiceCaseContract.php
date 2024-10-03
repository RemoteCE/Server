<?php

declare(strict_types=1);

namespace App\Stats\Core\UseCases\Service\CreateStatsServiceCase;

use App\Stats\Core\Domain\Entity\Stats\ValueObject\ClientIdValueObject;
use App\Stats\Core\Domain\Entity\Stats\ValueObject\StatusValueObject;

interface CreateStatsServiceCaseContract
{
    /**
     * @param ClientIdValueObject $clientIdValueObject
     * @return StatusValueObject
     */
    public function create(ClientIdValueObject $clientIdValueObject): StatusValueObject;
}

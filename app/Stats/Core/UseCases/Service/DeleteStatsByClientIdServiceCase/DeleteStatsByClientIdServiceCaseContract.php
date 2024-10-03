<?php

declare(strict_types=1);

namespace App\Stats\Core\UseCases\Service\DeleteStatsByClientIdServiceCase;

use App\Stats\Core\Domain\Entity\Stats\ValueObject\ClientIdValueObject;
use App\Stats\Core\Domain\Entity\Stats\ValueObject\StatusValueObject;

interface DeleteStatsByClientIdServiceCaseContract
{
    /**
     * @param ClientIdValueObject $clientIdValueObject
     * @return StatusValueObject
     */
    public function delete(ClientIdValueObject $clientIdValueObject): StatusValueObject;
}

<?php

declare(strict_types=1);

namespace App\Command\Core\UseCases\Service\DeleteCommandByClientIdServiceCase;

use App\Command\Core\Domain\Entity\Command\ValueObject\ClientIdValueObject;
use App\Command\Core\Domain\Entity\Command\ValueObject\StatusValueObject;

interface DeleteCommandByClientIdServiceCaseContract
{
    /**
     * @param ClientIdValueObject $clientIdValueObject
     * @return StatusValueObject
     */
    public function delete(ClientIdValueObject $clientIdValueObject): StatusValueObject;
}

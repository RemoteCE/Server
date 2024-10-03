<?php

declare(strict_types=1);

namespace App\Command\Core\UseCases\Service\UpdateCommandByClientIdServiceCase;

use App\Command\Core\Domain\Entity\Command\ValueObject\ClientIdValueObject;
use App\Command\Core\Domain\Entity\Command\ValueObject\CommandValueObject;
use App\Command\Core\Domain\Entity\Command\ValueObject\StatusValueObject;

interface UpdateCommandByClientIdServiceCaseContract
{
    public function update(
        ClientIdValueObject $clientIdValueObject,
        CommandValueObject $commandValueObject
    ): StatusValueObject;
}

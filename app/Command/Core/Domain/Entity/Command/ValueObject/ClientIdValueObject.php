<?php

declare(strict_types=1);

namespace App\Command\Core\Domain\Entity\Command\ValueObject;

use App\Command\Core\Domain\Entity\ValueObjectContract;

final readonly class ClientIdValueObject implements ValueObjectContract
{
    public function __construct(
        private int $clientId
    ) {
    }

    public function getClientId(): int
    {
        return $this->clientId;
    }


}

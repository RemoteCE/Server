<?php

declare(strict_types=1);

namespace App\Stats\Core\Domain\Entity\Stats\ValueObject;

use App\Stats\Core\Domain\Entity\ValueObjectContract;

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

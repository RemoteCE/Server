<?php

declare(strict_types=1);

namespace App\Command\Core\Domain\Entity\Command\ValueObject;

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

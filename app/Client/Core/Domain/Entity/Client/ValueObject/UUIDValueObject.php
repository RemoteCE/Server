<?php

declare(strict_types=1);

namespace App\Client\Core\Domain\Entity\Client\ValueObject;

final readonly class UUIDValueObject implements ValueObjectContract
{
    public function __construct(
        private string $uuid
    ) {
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }


}

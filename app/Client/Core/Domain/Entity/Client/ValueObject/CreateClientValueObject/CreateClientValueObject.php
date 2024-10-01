<?php

declare(strict_types=1);

namespace App\Client\Core\Domain\Entity\Client\ValueObject\CreateClientValueObject;

use App\Client\Core\Domain\Entity\Client\ValueObject\ValueObjectContract;

final readonly class CreateClientValueObject implements ValueObjectContract
{
    public function __construct(
        private bool $status,
        private ?string $uuid = null,
    ) {
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function getStatus(): bool
    {
        return $this->status;
    }


}

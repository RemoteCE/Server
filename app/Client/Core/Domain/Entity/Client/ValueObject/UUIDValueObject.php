<?php
declare(strict_types=1);

namespace App\Client\Core\Domain\Entity\Client\ValueObject;

final readonly class UUIDValueObject
{
    public function __construct(private string $uuid)
    {
    }

    public function getUuid(): string{
        return $this->uuid;
    }
}

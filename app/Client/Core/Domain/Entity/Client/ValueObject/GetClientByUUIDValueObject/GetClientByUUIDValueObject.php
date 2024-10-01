<?php

declare(strict_types=1);

namespace App\Client\Core\Domain\Entity\Client\ValueObject\GetClientByUUIDValueObject;

use App\Client\Core\Domain\Entity\Client\ValueObject\ValueObjectContract;

final readonly class GetClientByUUIDValueObject implements ValueObjectContract
{
    public function __construct(
        private bool $status,
        private ?int $id = null,
        private ?string $uuid = null,
        private ?string $name = null,
        private ?string $ip = null,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function getStatus(): bool
    {
        return $this->status;
    }


}

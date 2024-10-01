<?php

declare(strict_types=1);

namespace App\Client\Core\Domain\Entity\Client\ValueObject;

final readonly class ClientValueObject implements ValueObjectContract
{
    public function __construct(
        private int $id,
        private string $uuid,
        private ?string $name,
        private ?string $ip
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


}

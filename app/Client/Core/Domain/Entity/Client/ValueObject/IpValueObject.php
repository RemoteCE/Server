<?php

declare(strict_types=1);

namespace App\Client\Core\Domain\Entity\Client\ValueObject;

final readonly class IpValueObject implements ValueObjectContract
{
    public function __construct(
        private ?string $ip
    ) {
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }
}

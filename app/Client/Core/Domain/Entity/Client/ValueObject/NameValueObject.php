<?php

declare(strict_types=1);

namespace App\Client\Core\Domain\Entity\Client\ValueObject;

final readonly class NameValueObject implements ValueObjectContract
{
    public function __construct(
        private ?string $name,
    ) {
    }

    public function getName(): ?string
    {
        return $this->name;
    }


}

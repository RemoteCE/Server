<?php

declare(strict_types=1);

namespace App\Client\Core\Domain\Entity\Client\ValueObject;

final readonly class IdValueObject implements ValueObjectContract
{
    public function __construct(
        private int $id
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }


}

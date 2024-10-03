<?php

declare(strict_types=1);

namespace App\Stats\Core\Domain\Entity\Stats\ValueObject;

use App\Stats\Core\Domain\Entity\ValueObjectContract;

final readonly class StatusValueObject implements ValueObjectContract
{
    public function __construct(
        private bool $status,
    ) {
    }

    public function getStatus(): bool
    {
        return $this->status;
    }


}

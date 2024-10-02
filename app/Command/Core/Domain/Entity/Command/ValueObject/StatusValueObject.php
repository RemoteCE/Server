<?php

declare(strict_types=1);

namespace App\Command\Core\Domain\Entity\Command\ValueObject;

use App\Command\Core\Domain\Entity\ValueObjectContract;

final readonly class StatusValueObject implements ValueObjectContract
{
    public function __construct(
        private bool $status
    ) {
    }

    public function getStatus(): bool
    {
        return $this->status;
    }


}

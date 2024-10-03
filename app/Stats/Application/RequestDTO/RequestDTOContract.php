<?php

declare(strict_types=1);

namespace App\Stats\Application\RequestDTO;

interface RequestDTOContract
{
    public function toArray(): array;

    public function toJson(): string;

    public static function fromArray(array $data): self;
}

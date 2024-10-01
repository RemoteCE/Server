<?php

declare(strict_types=1);

namespace App\Command\Presentation\API\CreateCommandAPI;

interface CreateCommandAPIContract
{
    public function create(int $clientId): void;
}

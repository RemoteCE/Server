<?php

declare(strict_types=1);

namespace App\Command\Presentation\API\UpdateCommandByClientIdAPI;

interface UpdateCommandByClientIdAPIContract
{
    public function update(int $clientId, ?string $command, ?string $response): void;
}

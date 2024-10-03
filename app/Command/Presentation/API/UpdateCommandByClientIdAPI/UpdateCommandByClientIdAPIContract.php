<?php

declare(strict_types=1);

namespace App\Command\Presentation\API\UpdateCommandByClientIdAPI;

use Illuminate\Http\JsonResponse;

interface UpdateCommandByClientIdAPIContract
{
    public function update(string $clientId, ?string $newClientId, ?string $command, ?string $response): JsonResponse;
}

<?php

declare(strict_types=1);

namespace App\Command\Presentation\API\CreateCommandAPI;

use Illuminate\Http\JsonResponse;

interface CreateCommandAPIContract
{
    public function create(int $clientId): JsonResponse;
}

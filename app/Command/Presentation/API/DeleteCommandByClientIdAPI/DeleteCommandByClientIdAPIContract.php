<?php

declare(strict_types=1);

namespace App\Command\Presentation\API\DeleteCommandByClientIdAPI;

use Illuminate\Http\JsonResponse;

interface DeleteCommandByClientIdAPIContract
{
    public function delete(string $clientId): JsonResponse;
}

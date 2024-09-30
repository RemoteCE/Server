<?php
declare(strict_types=1);

namespace App\Stats\Application\Service\CreateStatsService;

use Illuminate\Http\Exceptions\HttpResponseException;

interface CreateStatsServiceContract
{
    /**
     * @param int $clientId
     * @return void
     * @throws HttpResponseException;
     */
    public function create(int $clientId): void;
}

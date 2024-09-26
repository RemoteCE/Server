<?php
declare(strict_types=1);

namespace App\Stats\Application\API\CreateStatsAPI;

use Illuminate\Http\Exceptions\HttpResponseException;

interface CreateStatsAPIContract
{
    /**
     * @param int $clientId
     * @return void
     * @throws HttpResponseException;
     */
    public function create(int $clientId): void;
}

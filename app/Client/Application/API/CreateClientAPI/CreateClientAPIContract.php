<?php
declare(strict_types=1);

namespace App\Client\Application\API\CreateClientAPI;

use Illuminate\Http\Exceptions\HttpResponseException;

interface CreateClientAPIContract
{
    /**
     * @param string $uuid
     * @return void
     * @throws HttpResponseException
     */
    public function create(string $uuid): void;
}

<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Database\Repository\ClientRepository\GetClientByUUID;

use App\Client\Infrastructure\Database\Models\Client;
use Illuminate\Database\Eloquent\ModelNotFoundException;

final readonly class GetClientByUUID
{
    public function __construct(private Client $model)
    {

    }

    /**
     * @param string $uuid
     * @return mixed
     * @throws ClientNotFoundByUUIDException
     */
    public function getClient(string $uuid): Client
    {
        try {
            return $this->model->where('uuid', $uuid)->firstOrFail();

        } catch (ModelNotFoundException) {
            throw new ClientNotFoundByUUIDException($uuid);
        }
    }
}

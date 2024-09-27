<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Database\Repository\ClientRepository\GetClientById;

use App\Client\Infrastructure\Database\Models\Client;
use Illuminate\Database\Eloquent\ModelNotFoundException;

final readonly class GetClientById
{
    public function __construct(private Client $model)
    {

    }

    /**
     * @param int $id
     * @return Client
     * @throws ClientNotFoundByIdException
     */
    public function getClient(int $id): Client
    {
        try {
            return $this->model->where('id', $id)->firstOrFail();
        } catch (ModelNotFoundException) {
            throw new ClientNotFoundByIdException($id);
        }
    }
}

<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Database\Repository\ClientRepository\DeleteClientByUUID;

use App\Client\Infrastructure\Database\Models\Client;

final readonly class DeleteClientByUUID
{
    public function __construct(private Client $model)
    {

    }

    /**
     * @param string $uuid
     * @return void
     */
    public function deleteClient(string $uuid): void
    {
        $this->model->where('uuid', $uuid)->delete();
    }
}

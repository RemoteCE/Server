<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Database\Repository\ClientRepository\DeleteClientById;

use App\Client\Infrastructure\Database\Models\Client;

final readonly class DeleteClientById
{
    public function __construct(private Client $model)
    {

    }

    /**
     * @param int $id
     * @return void
     */
    public function deleteClient(int $id): void
    {
        $this->model->where('id', $id)->delete();
    }
}

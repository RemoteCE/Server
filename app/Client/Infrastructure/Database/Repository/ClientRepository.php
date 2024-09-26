<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Database\Repository;

use App\Client\Core\Contracts\Database\Repository\ClientRepositoryContract;
use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Core\Domain\Entity\Client\ClientNotFoundException;
use App\Client\Core\Domain\Entity\Client\Events\ClientCreatedEvent;
use App\Client\Infrastructure\Database\Models\Client as ClientModel;
use Illuminate\Database\Eloquent\ModelNotFoundException;

readonly final class ClientRepository implements ClientRepositoryContract
{
    public function __construct(private ClientModel $model)
    {
    }

    /**
     * @param string $field
     * @param string $value
     * @return ClientModel
     * @throws ClientNotFoundException
     */
    private function getModel(string $field, string $value): ClientModel
    {
        try {
            return $this->model->where($field, $value)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            throw new ClientNotFoundException();
        }

    }

    /**
     * @param string $uuid
     * @return ClientModel
     * @throws ClientNotFoundException
     */
    private function getModelByUUID(string $uuid): ClientModel
    {
        return $this->getModel('uuid', $uuid);
    }

    /**
     * @param int $id
     * @return ClientModel
     * @throws ClientNotFoundException
     */
    private function getModelById(int $id): ClientModel
    {
        return $this->getModel('id', (string)$id);
    }

    public function create(Client $client): void
    {
        $newClient = new ClientModel();
        $newClient->uuid = $client->getUuid();
        $newClient->save();

        event(new ClientCreatedEvent(Client::fromArray($newClient->toArray())));
    }

    public function deleteByUUID(string $uuid): void
    {
        $this->getModelByUUID($uuid)->delete();
    }


    public function getByUUID(string $uuid): Client
    {
        return Client::fromArray($this->getModelByUUID($uuid)->toArray());
    }


    public function getById(int $id): Client
    {
        return Client::fromArray($this->getModelById($id)->toArray());
    }
}

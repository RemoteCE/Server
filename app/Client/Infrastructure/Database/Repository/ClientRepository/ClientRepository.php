<?php

declare(strict_types=1);

namespace App\Client\Infrastructure\Database\Repository\ClientRepository;

use App\Client\Core\Contracts\Database\Repository\ClientRepositoryContract;
use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\Database\Repository\ClientRepository\CreateClient\CreateClient;
use App\Client\Infrastructure\Database\Repository\ClientRepository\DeleteClientById\DeleteClientById;
use App\Client\Infrastructure\Database\Repository\ClientRepository\DeleteClientByUUID\DeleteClientByUUID;
use App\Client\Infrastructure\Database\Repository\ClientRepository\GetClientById\GetClientById;
use App\Client\Infrastructure\Database\Repository\ClientRepository\GetClientByUUID\GetClientByUUID;

readonly final class ClientRepository implements ClientRepositoryContract
{
    public function __construct(
        private CreateClient $createClient,
        private DeleteClientById $deleteClientById,
        private DeleteClientByUUID $deleteClientByUUID,
        private GetClientById $getClientById,
        private GetClientByUUID $getClientByUUID,
    ) {
    }

    public function create(Client $client): Client
    {
        return Client::fromArray(
            $this->createClient->create($client)->toArray()
        );
    }

    public function deleteByUUID(string $uuid): void
    {
        $this->deleteClientByUUID->deleteClient($uuid);
    }

    public function deleteById(int $id): void
    {
        $this->deleteClientById->deleteClient($id);
    }

    public function getByUUID(string $uuid): Client
    {
        return Client::fromArray($this->getClientByUUID->getClient($uuid)->toArray());
    }

    public function getById(int $id): Client
    {
        return Client::fromArray($this->getClientById->getClient($id)->toArray());
    }


}

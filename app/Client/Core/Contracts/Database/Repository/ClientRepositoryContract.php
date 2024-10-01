<?php

declare(strict_types=1);

namespace App\Client\Core\Contracts\Database\Repository;

use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\Database\Repository\ClientRepository\GetClientById\ClientNotFoundByIdException;
use App\Client\Infrastructure\Database\Repository\ClientRepository\GetClientByUUID\ClientNotFoundByUUIDException;

interface ClientRepositoryContract
{
    /**
     * @param Client $client
     * @return Client
     */
    public function create(Client $client): Client;

    /**
     * @param string $uuid
     * @return void
     */
    public function deleteByUUID(string $uuid): void;

    /**
     * @param int $id
     * @return void
     */
    public function deleteById(int $id): void;

    /**
     * @param string $uuid
     * @return Client
     * @throws ClientNotFoundByUUIDException
     */
    public function getByUUID(string $uuid): Client;


    /**
     * @param int $id
     * @return Client
     * @throws ClientNotFoundByIdException
     */
    public function getById(int $id): Client;
}

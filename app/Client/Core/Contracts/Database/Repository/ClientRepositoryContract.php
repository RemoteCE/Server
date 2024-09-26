<?php
declare(strict_types=1);

namespace App\Client\Core\Contracts\Database\Repository;

use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Core\Domain\Entity\Client\ClientNotFoundException;
use App\Client\Infrastructure\Service\StatsService\StatsServiceException;

interface ClientRepositoryContract
{
    /**
     * @param Client $client
     * @return void
     * @throws StatsServiceException
     */
    public function create(Client $client): void;

    /**
     * @param string $uuid
     * @return void
     * @throws ClientNotFoundException
     */
    public function deleteByUUID(string $uuid): void;

    /**
     * @param string $uuid
     * @return Client
     * @throws ClientNotFoundException
     */
    public function getByUUID(string $uuid): Client;

    /**
     * @param int $id
     * @return Client
     * @throws ClientNotFoundException
     */
    public function getById(int $id): Client;
}

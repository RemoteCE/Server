<?php

declare(strict_types=1);

namespace App\Client\Infrastructure\Database\Repository\ClientRepository\CreateClient;

use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Infrastructure\Database\Models\Client as ClientModel;

final readonly class CreateClient
{
    public function create(Client $client): ClientModel
    {
        $newClient = new ClientModel([
            'uuid' => $client->getUuid(),
            'name' => $client->getName(),
            'ip' => $client->getIp(),
        ]);
        $newClient->save();

        return $newClient;
    }
}

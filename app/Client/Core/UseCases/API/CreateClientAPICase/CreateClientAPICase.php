<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases\API\CreateClientAPICase;

use App\Client\Application\RequestDTO\CreateClientRequestDTO;
use App\Client\Core\Contracts\Database\Repository\ClientRepositoryContract;
use App\Client\Core\Domain\Entity\Client\Client;

readonly final class CreateClientAPICase implements CreateClientAPICaseContract
{
    public function __construct(private ClientRepositoryContract $clientRepository)
    {
    }

    public function create(CreateClientRequestDTO $clientRequestDTO): void
    {
        $this->clientRepository->create(Client::fromArray($clientRequestDTO->toArray()));
    }

}

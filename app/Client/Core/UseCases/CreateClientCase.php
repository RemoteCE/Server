<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases;

use App\Client\Application\Contracts\Repository\ClientRepositoryContract;
use App\Client\Application\Contracts\UseCases\CreateClientCaseContract;
use App\Client\Application\RequestDTO\CreateClientRequestDTO;
use App\Client\Core\Domain\Entity\Client\Client;

readonly final class CreateClientCase implements CreateClientCaseContract
{
    public function __construct(private ClientRepositoryContract $clientRepository)
    {
    }

    public function create(CreateClientRequestDTO $clientRequestDTO): void
    {
        $this->clientRepository->create(Client::fromArray($clientRequestDTO->toArray()));
    }

}

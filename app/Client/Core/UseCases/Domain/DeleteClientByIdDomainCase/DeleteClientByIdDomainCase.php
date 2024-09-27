<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases\Domain\DeleteClientByIdDomainCase;

use App\Client\Core\Contracts\Database\Repository\ClientRepositoryContract;
use App\Client\Core\Domain\Entity\Client\Client;

final readonly class DeleteClientByIdDomainCase implements DeleteClientByIdDomainCaseContract
{
    public function __construct(private ClientRepositoryContract $clientRepository)
    {
    }

    public function delete(Client $client): void
    {
        $this->clientRepository->deleteById($client->getId());
    }

}

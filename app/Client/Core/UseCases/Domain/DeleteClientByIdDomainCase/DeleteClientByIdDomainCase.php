<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases\Domain\DeleteClientByIdDomainCase;

use App\Client\Core\Contracts\Database\Repository\ClientRepositoryContract;

final readonly class DeleteClientByIdDomainCase implements DeleteClientByIdDomainCaseContract
{
    public function __construct(private ClientRepositoryContract $clientRepository)
    {
    }

    public function deleteClient(int $id): void
    {
        $this->clientRepository->deleteById($id);
    }

}

<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases\Service\CreateClientServiceCase;

use App\Client\Application\RequestDTO\CreateClientRequestDTO;
use App\Client\Core\Contracts\Database\Repository\ClientRepositoryContract;
use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Core\Domain\Entity\Client\ValueObject\UUIDValueObject;

readonly final class CreateClientServiceCase implements CreateClientServiceCaseContract
{
    public function __construct(private ClientRepositoryContract $clientRepository)
    {
    }

    public function create(UUIDValueObject $UUIDValueObject): void
    {
        $this->clientRepository->create(
            Client::fromArray([
                'uuid' => $UUIDValueObject->getUuid()
            ])
        );
    }

}

<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases\Service\GetClientByUUIDServiceCase;

use App\Client\Core\Contracts\Database\Repository\ClientRepositoryContract;
use App\Client\Core\Domain\Entity\Client\ValueObject\ClientValueObject;
use App\Client\Core\Domain\Entity\Client\ValueObject\UUIDValueObject;
use App\Client\Infrastructure\Database\Repository\ClientRepository\ClientRepositoryException;

final readonly class GetClientByUUIDServiceCase implements GetClientByUUIDServiceCaseContract
{
    public function __construct(private ClientRepositoryContract $clientRepository)
    {
    }

    public function get(UUIDValueObject $UUIDValueObject): ClientValueObject
    {
        try{
            $Client = $this->clientRepository->getByUUID($UUIDValueObject->getUUID());
            return new ClientValueObject(
                $Client->getId(),
                $Client->getUuid()
            );
        } catch (ClientRepositoryException $exception) {
            throw new GetClientByUUIDServiceCaseException($exception->getMessage());
        }
    }
}

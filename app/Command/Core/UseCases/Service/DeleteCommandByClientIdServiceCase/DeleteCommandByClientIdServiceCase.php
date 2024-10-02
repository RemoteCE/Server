<?php

declare(strict_types=1);

namespace App\Command\Core\UseCases\Service\DeleteCommandByClientIdServiceCase;

use App\Command\Core\Contracts\Database\Repository\CommandRepositoryContract;
use App\Command\Core\Domain\Entity\Command\ValueObject\ClientIdValueObject;
use App\Command\Core\Domain\Entity\Command\ValueObject\StatusValueObject;

final readonly class DeleteCommandByClientIdServiceCase implements DeleteCommandByClientIdServiceCaseContract
{
    public function __construct(private CommandRepositoryContract $commandRepository)
    {
    }

    public function delete(ClientIdValueObject $clientIdValueObject): StatusValueObject
    {
        return new StatusValueObject(
            $this->commandRepository->deleteByClientId($clientIdValueObject->getClientId())
        );
    }
}

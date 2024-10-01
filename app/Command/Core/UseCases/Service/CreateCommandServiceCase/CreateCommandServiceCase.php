<?php

declare(strict_types=1);

namespace App\Command\Core\UseCases\Service\CreateCommandServiceCase;

use App\Command\Core\Contracts\Database\Repository\CommandRepositoryContract;
use App\Command\Core\Domain\Entity\Command\Command;
use App\Command\Core\Domain\Entity\Command\ValueObject\ClientIdValueObject;
use App\Command\Core\Domain\Entity\Command\ValueObject\StatusValueObject;

final readonly class CreateCommandServiceCase implements CreateCommandServiceCaseContract
{
    public function __construct(private CommandRepositoryContract $commandRepository)
    {
    }

    public function create(ClientIdValueObject $clientIdValueObject): StatusValueObject
    {
        return new StatusValueObject(
            $this->commandRepository->create(
                Command::fromArray([
                    'clientId' => $clientIdValueObject->getClientId()
                ])
            )
        );
    }
}

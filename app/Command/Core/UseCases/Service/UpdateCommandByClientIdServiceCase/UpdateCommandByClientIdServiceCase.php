<?php

declare(strict_types=1);

namespace App\Command\Core\UseCases\Service\UpdateCommandByClientIdServiceCase;

use App\Command\Core\Contracts\Database\Repository\CommandRepositoryContract;
use App\Command\Core\Domain\Entity\Command\Command;
use App\Command\Core\Domain\Entity\Command\ValueObject\ClientIdValueObject;
use App\Command\Core\Domain\Entity\Command\ValueObject\CommandValueObject;
use App\Command\Core\Domain\Entity\Command\ValueObject\StatusValueObject;

final readonly class UpdateCommandByClientIdServiceCase implements UpdateCommandByClientIdServiceCaseContract
{
    public function __construct(private CommandRepositoryContract $commandRepository)
    {
    }

    public function update(
        ClientIdValueObject $clientIdValueObject,
        CommandValueObject $commandValueObject
    ): StatusValueObject {
        return new StatusValueObject(
            $this->commandRepository->updateByClientId(
                $clientIdValueObject->getClientId(),
                Command::fromArray([
                        'clientId' => $commandValueObject->getClientId(),
                        'command' => $commandValueObject->getCommand(),
                        'response' => $commandValueObject->getResponse(),
                    ]
                )
            )
        );
    }
}

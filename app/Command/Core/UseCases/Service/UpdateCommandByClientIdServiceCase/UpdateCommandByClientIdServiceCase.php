<?php
declare(strict_types=1);

namespace App\Command\Core\UseCases\Service\UpdateCommandByClientIdServiceCase;

use App\Command\Application\RequestDTO\UpdateCommandByClientIdRequestDTO;
use App\Command\Core\Contracts\Database\Repository\CommandRepositoryContract;
use App\Command\Core\Domain\Entity\Command\Command;

final readonly class UpdateCommandByClientIdServiceCase implements UpdateCommandByClientIdServiceCaseContract
{
    public function __construct(private CommandRepositoryContract $commandRepository)
    {
    }

    public function update(UpdateCommandByClientIdRequestDTO $updateCommandByClientIdRequestDTO): void
    {
        $this->commandRepository->updateByClientId(
            $updateCommandByClientIdRequestDTO->getClientId(),
            Command::fromArray($updateCommandByClientIdRequestDTO->toArray())
        );
    }
}

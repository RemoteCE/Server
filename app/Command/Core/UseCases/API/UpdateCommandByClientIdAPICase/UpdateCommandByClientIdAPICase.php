<?php
declare(strict_types=1);

namespace App\Command\Core\UseCases\API\UpdateCommandByClientIdAPICase;

use App\Command\Application\RequestDTO\UpdateCommandByClientIdRequestDTO;
use App\Command\Core\Contracts\Database\Repository\CommandRepositoryContract;
use App\Command\Core\Domain\Entity\Command\Command;
use App\Command\Core\UseCases\API\UpdateCommandByClientIdAPICase\UpdateCommandByClientIdAPICaseContract;

final readonly class UpdateCommandByClientIdAPICase implements UpdateCommandByClientIdAPICaseContract
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

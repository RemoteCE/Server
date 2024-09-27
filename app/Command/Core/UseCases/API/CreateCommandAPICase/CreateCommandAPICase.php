<?php
declare(strict_types=1);

namespace App\Command\Core\UseCases\API\CreateCommandAPICase;

use App\Command\Application\RequestDTO\CreateCommandRequestDTO;
use App\Command\Core\Contracts\Database\Repository\CommandRepositoryContract;
use App\Command\Core\Domain\Entity\Command\Command;
use App\Command\Core\UseCases\API\CreateCommandAPICase\CreateCommandAPICaseContract;
final readonly class CreateCommandAPICase implements CreateCommandAPICaseContract
{
    public function __construct(private CommandRepositoryContract $commandRepository)
    {

    }

    public function create(CreateCommandRequestDTO $createCommandRequestDTO): void
    {
        $this->commandRepository->create(Command::fromArray($createCommandRequestDTO->toArray()));
    }
}

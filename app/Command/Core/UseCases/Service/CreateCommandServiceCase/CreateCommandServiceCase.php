<?php
declare(strict_types=1);

namespace App\Command\Core\UseCases\Service\CreateCommandServiceCase;

use App\Command\Application\RequestDTO\CreateCommandRequestDTO;
use App\Command\Core\Contracts\Database\Repository\CommandRepositoryContract;
use App\Command\Core\Domain\Entity\Command\Command;
final readonly class CreateCommandServiceCase implements CreateCommandServiceCaseContract
{
    public function __construct(private CommandRepositoryContract $commandRepository)
    {

    }

    public function create(CreateCommandRequestDTO $createCommandRequestDTO): void
    {
        $this->commandRepository->create(Command::fromArray($createCommandRequestDTO->toArray()));
    }
}

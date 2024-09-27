<?php
declare(strict_types=1);

namespace App\Command\Core\UseCases\API\DeleteCommandByClientIdAPICase;

use App\Command\Application\RequestDTO\DeleteCommandByClientIdRequestDTO;
use App\Command\Core\Contracts\Database\Repository\CommandRepositoryContract;

final readonly class DeleteCommandByClientIdAPICase implements DeleteCommandByClientIdAPICaseContract
{
    public function __construct(private CommandRepositoryContract $commandRepository)
    {

    }

    public function delete(DeleteCommandByClientIdRequestDTO $deleteCommandByClientIdRequestDTO): void
    {
        $this->commandRepository->deleteByClientId($deleteCommandByClientIdRequestDTO->getClientId());
    }
}

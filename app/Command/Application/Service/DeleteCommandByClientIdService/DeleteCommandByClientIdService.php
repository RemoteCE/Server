<?php

declare(strict_types=1);

namespace App\Command\Application\Service\DeleteCommandByClientIdService;

use App\Command\Application\RequestDTO\DeleteCommandByClientIdRequestDTO;
use App\Command\Core\UseCases\Service\DeleteCommandByClientIdServiceCase\DeleteCommandByClientIdServiceCaseContract;

final readonly class DeleteCommandByClientIdService implements DeleteCommandByClientIdServiceContract
{
    public function __construct(
        private DeleteCommandByClientIdServiceCaseContract $deleteCommandByClientIdServiceCase
    ) {
    }


    public function delete(DeleteCommandByClientIdRequestDTO $deleteCommandByClientIdRequestDTO): void
    {
        $this->deleteCommandByClientIdServiceCase->delete($deleteCommandByClientIdRequestDTO);
    }
}

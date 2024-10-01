<?php

declare(strict_types=1);

namespace App\Command\Application\Service\UpdateCommandByClientIdService;

use App\Command\Application\RequestDTO\UpdateCommandByClientIdRequestDTO;
use App\Command\Core\UseCases\Service\UpdateCommandByClientIdServiceCase\UpdateCommandByClientIdServiceCaseContract;

final readonly class UpdateCommandByClientIdService implements UpdateCommandByClientIdServiceContract
{
    public function __construct(
        private UpdateCommandByClientIdServiceCaseContract $updateCommandByClientIdServiceCase
    ) {
    }

    public function update(UpdateCommandByClientIdRequestDTO $updateCommandByClientIdRequestDTO): void
    {
        $this->updateCommandByClientIdServiceCase->update($updateCommandByClientIdRequestDTO);
    }

}

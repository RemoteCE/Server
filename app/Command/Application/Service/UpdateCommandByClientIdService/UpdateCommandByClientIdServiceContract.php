<?php

declare(strict_types=1);

namespace App\Command\Application\Service\UpdateCommandByClientIdService;

use App\Command\Application\RequestDTO\UpdateCommandByClientIdRequestDTO;

interface UpdateCommandByClientIdServiceContract
{
    /**
     * @param UpdateCommandByClientIdRequestDTO $updateCommandByClientIdRequestDTO
     * @return void
     */
    public function update(UpdateCommandByClientIdRequestDTO $updateCommandByClientIdRequestDTO): void;
}

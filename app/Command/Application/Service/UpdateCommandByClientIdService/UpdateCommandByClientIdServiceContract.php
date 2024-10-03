<?php

declare(strict_types=1);

namespace App\Command\Application\Service\UpdateCommandByClientIdService;

use App\Command\Application\RequestDTO\UpdateCommandByClientIdRequestDTO;
use App\Command\Application\ResponseDTO\UpdateCommandByClientIdResponseDTO;

interface UpdateCommandByClientIdServiceContract
{
    /**
     * @param UpdateCommandByClientIdRequestDTO $updateCommandByClientIdRequestDTO
     * @return UpdateCommandByClientIdResponseDTO
     */
    public function update(
        UpdateCommandByClientIdRequestDTO $updateCommandByClientIdRequestDTO
    ): UpdateCommandByClientIdResponseDTO;
}

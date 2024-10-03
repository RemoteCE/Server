<?php

declare(strict_types=1);

namespace App\Stats\Application\Service\DeleteStatsByClientIdService;

use App\Stats\Application\RequestDTO\DeleteStatsByClientIdRequestDTO;
use App\Stats\Application\ResponseDTO\DeleteStatsByClientIdResponseDTO;

interface DeleteStatsByClientIdServiceContract
{
    /**
     * @param DeleteStatsByClientIdRequestDTO $deleteStatsByClientIdRequestDTO
     * @return DeleteStatsByClientIdRequestDTO
     */
    public function delete(
        DeleteStatsByClientIdRequestDTO $deleteStatsByClientIdRequestDTO
    ): DeleteStatsByClientIdResponseDTO;
}

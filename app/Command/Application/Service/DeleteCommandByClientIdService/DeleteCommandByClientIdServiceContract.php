<?php

declare(strict_types=1);

namespace App\Command\Application\Service\DeleteCommandByClientIdService;

use App\Command\Application\RequestDTO\DeleteCommandByClientIdRequestDTO;
use App\Command\Application\ResponseDTO\DeleteCommandByClientIdResponseDTO;

interface DeleteCommandByClientIdServiceContract
{
    /**
     * @param DeleteCommandByClientIdRequestDTO $deleteCommandByClientIdRequestDTO
     * @return DeleteCommandByClientIdResponseDTO
     */
    public function delete(DeleteCommandByClientIdRequestDTO $deleteCommandByClientIdRequestDTO
    ): DeleteCommandByClientIdResponseDTO;
}

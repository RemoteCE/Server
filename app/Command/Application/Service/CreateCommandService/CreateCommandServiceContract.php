<?php

declare(strict_types=1);

namespace App\Command\Application\Service\CreateCommandService;

use App\Command\Application\RequestDTO\CreateCommandRequestDTO;
use App\Command\Application\ResponseDTO\CreateCommandResponseDTO;

interface CreateCommandServiceContract
{
    /**
     * @param CreateCommandRequestDTO $createCommandRequestDTO
     * @return CreateCommandResponseDTO
     */
    public function create(CreateCommandRequestDTO $createCommandRequestDTO): CreateCommandResponseDTO;
}

<?php

declare(strict_types=1);

namespace App\Command\Application\Service\CreateCommandService;

use App\Command\Application\RequestDTO\CreateCommandRequestDTO;

interface CreateCommandServiceContract
{
    /**
     * @param CreateCommandRequestDTO $createCommandRequestDTO
     * @return void
     */
    public function create(CreateCommandRequestDTO $createCommandRequestDTO): void;
}

<?php

declare(strict_types=1);

namespace App\Command\Application\Service\CreateCommandService;

use App\Command\Application\RequestDTO\CreateCommandRequestDTO;
use App\Command\Core\UseCases\Service\CreateCommandServiceCase\CreateCommandServiceCaseContract;

final readonly class CreateCommandService implements CreateCommandServiceContract
{
    public function __construct(
        private CreateCommandServiceCaseContract $createCommandServiceCase
    ) {
    }

    public function create(CreateCommandRequestDTO $createCommandRequestDTO): void
    {
        $this->createCommandServiceCase->create(
            $createCommandRequestDTO
        );
    }
}

<?php
declare(strict_types=1);

namespace App\Command\Core\UseCases\API\CreateCommandAPICase;

use App\Command\Application\RequestDTO\CreateCommandRequestDTO;

interface CreateCommandAPICaseContract
{
    /**
     * @param CreateCommandRequestDTO $createCommandRequestDTO
     * @return void
     */
    public function create(CreateCommandRequestDTO $createCommandRequestDTO): void;
}

<?php
declare(strict_types=1);

namespace App\Command\Core\UseCases\Service\CreateCommandServiceCase;

use App\Command\Application\RequestDTO\CreateCommandRequestDTO;

interface CreateCommandServiceCaseContract
{
    /**
     * @param CreateCommandRequestDTO $createCommandRequestDTO
     * @return void
     */
    public function create(CreateCommandRequestDTO $createCommandRequestDTO): void;
}

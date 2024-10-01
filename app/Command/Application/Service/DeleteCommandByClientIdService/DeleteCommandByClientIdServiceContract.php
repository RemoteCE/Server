<?php

declare(strict_types=1);

namespace App\Command\Application\Service\DeleteCommandByClientIdService;

use App\Command\Application\RequestDTO\DeleteCommandByClientIdRequestDTO;

interface DeleteCommandByClientIdServiceContract
{
    /**
     * @param DeleteCommandByClientIdRequestDTO $deleteCommandByClientIdRequestDTO
     * @return void
     */
    public function delete(DeleteCommandByClientIdRequestDTO $deleteCommandByClientIdRequestDTO): void;
}

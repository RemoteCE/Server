<?php
declare(strict_types=1);

namespace App\Command\Core\UseCases\Service\DeleteCommandByClientIdServiceCase;

use App\Command\Application\RequestDTO\DeleteCommandByClientIdRequestDTO;

interface DeleteCommandByClientIdServiceCaseContract
{
    /**
     * @param DeleteCommandByClientIdRequestDTO $deleteCommandByClientIdRequestDTO
     * @return void
     */
    public function delete(DeleteCommandByClientIdRequestDTO $deleteCommandByClientIdRequestDTO): void;
}

<?php
declare(strict_types=1);

namespace App\Command\Core\UseCases\API\DeleteCommandByClientIdAPICase;

use App\Command\Application\RequestDTO\DeleteCommandByClientIdRequestDTO;

interface DeleteCommandByClientIdAPICaseContract
{
    /**
     * @param DeleteCommandByClientIdRequestDTO $deleteCommandByClientIdRequestDTO
     * @return void
     */
    public function delete(DeleteCommandByClientIdRequestDTO $deleteCommandByClientIdRequestDTO): void;
}

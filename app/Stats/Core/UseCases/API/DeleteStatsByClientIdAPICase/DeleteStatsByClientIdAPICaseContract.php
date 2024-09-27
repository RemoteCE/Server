<?php
declare(strict_types=1);

namespace App\Stats\Core\UseCases\API\DeleteStatsByClientIdAPICase;

use App\Stats\Application\RequestDTO\DeleteStatsByClientIdRequestDTO;

interface DeleteStatsByClientIdAPICaseContract
{
    /**
     * @param DeleteStatsByClientIdRequestDTO $deleteStatsByClientIdDTO
     * @return void
     */
    public function delete(DeleteStatsByClientIdRequestDTO $deleteStatsByClientIdDTO): void;
}

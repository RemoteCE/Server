<?php
declare(strict_types=1);

namespace App\Stats\Core\UseCases\Service\DeleteStatsByClientIdServiceCase;

use App\Stats\Application\RequestDTO\DeleteStatsByClientIdRequestDTO;

interface DeleteStatsByClientIdServiceCaseContract
{
    /**
     * @param DeleteStatsByClientIdRequestDTO $deleteStatsByClientIdDTO
     * @return void
     */
    public function delete(DeleteStatsByClientIdRequestDTO $deleteStatsByClientIdDTO): void;
}

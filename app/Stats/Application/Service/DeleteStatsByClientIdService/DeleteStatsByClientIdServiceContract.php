<?php
declare(strict_types=1);

namespace App\Stats\Application\Service\DeleteStatsByClientIdService;

interface DeleteStatsByClientIdServiceContract
{
    /**
     * @param int $clientId
     * @return void
     */
    public function delete(int $clientId): void;
}

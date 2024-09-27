<?php
declare(strict_types=1);

namespace App\Stats\Application\API\DeleteStatsByClientIdAPI;

interface DeleteStatsByClientIdAPIContract
{
    /**
     * @param int $clientId
     * @return void
     */
    public function delete(int $clientId): void;
}

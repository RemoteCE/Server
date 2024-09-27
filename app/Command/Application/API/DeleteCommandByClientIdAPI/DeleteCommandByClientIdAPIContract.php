<?php
declare(strict_types=1);

namespace App\Command\Application\API\DeleteCommandByClientIdAPI;

interface DeleteCommandByClientIdAPIContract
{
    /**
     * @param int $clientId
     * @return void
     */
    public function delete(int $clientId): void;
}

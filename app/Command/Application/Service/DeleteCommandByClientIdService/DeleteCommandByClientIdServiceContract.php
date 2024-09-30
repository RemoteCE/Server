<?php
declare(strict_types=1);

namespace App\Command\Application\Service\DeleteCommandByClientIdService;

interface DeleteCommandByClientIdServiceContract
{
    /**
     * @param int $clientId
     * @return void
     */
    public function delete(int $clientId): void;
}

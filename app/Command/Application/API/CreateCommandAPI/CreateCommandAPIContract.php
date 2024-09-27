<?php
declare(strict_types=1);

namespace App\Command\Application\API\CreateCommandAPI;

interface CreateCommandAPIContract
{
    /**
     * @param int $clientId
     * @return void
     */
    public function create(int $clientId): void;
}

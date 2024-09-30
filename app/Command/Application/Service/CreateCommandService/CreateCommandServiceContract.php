<?php
declare(strict_types=1);

namespace App\Command\Application\Service\CreateCommandService;

interface CreateCommandServiceContract
{
    /**
     * @param int $clientId
     * @return void
     */
    public function create(int $clientId): void;
}

<?php
declare(strict_types=1);

namespace App\Command\Application\API\UpdateCommandByClientIdAPI;

interface UpdateCommandByClientIdAPIContract
{
    /**
     * @param int $clientId
     * @param string|null $command
     * @param string|null $response
     * @return void
     */
    public function update(int $clientId, ?string $command, ?string $response): void;
}

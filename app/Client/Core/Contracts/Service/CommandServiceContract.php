<?php
declare(strict_types=1);

namespace App\Client\Core\Contracts\Service;

use App\Client\Infrastructure\Service\CommandService\CreateCommand\CommandServiceCreateCommandException;

interface CommandServiceContract
{
    /**
     * @param int $userId
     * @return void
     * @throws CommandServiceCreateCommandException
     */
    public function createCommand(int $userId): void;
}

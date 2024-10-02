<?php

declare(strict_types=1);

namespace App\Command\Core\Contracts\Database\Repository;

use App\Command\Core\Domain\Entity\Command\Command;

interface CommandRepositoryContract
{
    /**
     * @param Command $command
     * @return bool
     */
    public function create(Command $command): bool;

    /**
     * @param int $clientId
     * @return bool
     */
    public function deleteByClientId(int $clientId): bool;

    /**
     * @param int $clientId
     * @param Command $command
     * @return void
     */
    public function updateByClientId(int $clientId, Command $command): void;
}

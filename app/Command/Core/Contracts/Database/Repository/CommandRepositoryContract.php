<?php
declare(strict_types=1);

namespace App\Command\Core\Contracts\Database\Repository;

use App\Command\Core\Domain\Entity\Command\Command;

interface CommandRepositoryContract
{
    /**
     * @param Command $command
     * @return void
     */
    public function create(Command $command): void;

    /**
     * @param int $clientId
     * @return void
     */
    public function deleteByClientId(int $clientId): void;
}

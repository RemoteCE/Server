<?php
declare(strict_types=1);

namespace App\Command\Core\Contracts\Database\Repository;

use App\Command\Core\Domain\Entity\Command\Command;

interface CommandRepositoryContract
{
    public function create(Command $command): void;
}

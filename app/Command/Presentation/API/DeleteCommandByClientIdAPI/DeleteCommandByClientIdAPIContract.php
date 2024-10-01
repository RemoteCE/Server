<?php

declare(strict_types=1);

namespace App\Command\Presentation\API\DeleteCommandByClientIdAPI;

interface DeleteCommandByClientIdAPIContract
{
    public function delete(int $clientId): void;
}

<?php
declare(strict_types=1);

namespace App\Client\Core\Domain\Entity\Client;

use App\Client\Core\Domain\Entity\EntityNotFoundException;

class ClientNotFoundException extends EntityNotFoundException
{
    public function __construct()
    {
        parent::__construct(Client::class);
    }
}

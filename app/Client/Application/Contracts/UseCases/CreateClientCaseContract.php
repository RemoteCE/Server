<?php
declare(strict_types=1);

namespace App\Client\Application\Contracts\UseCases;

use App\Client\Application\RequestDTO\CreateClientRequestDTO;

interface CreateClientCaseContract
{
    public function create(CreateClientRequestDTO $clientRequestDTO): void;
}

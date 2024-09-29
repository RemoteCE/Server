<?php
declare(strict_types=1);

namespace App\Client\Application\Service\CreateClientService;

use App\Client\Application\RequestDTO\CreateClientRequestDTO;

interface CreateClientServiceContract
{
    /**
     * @param CreateClientRequestDTO $createClientRequestDTO
     * @return void
     */
    public function create(CreateClientRequestDTO $createClientRequestDTO): void;
}

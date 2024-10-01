<?php

declare(strict_types=1);

namespace App\Client\Application\Service\CreateClientService;

use App\Client\Application\RequestDTO\CreateClientRequestDTO;
use App\Client\Application\ResponseDTO\CreateClientResponseDTO;

interface CreateClientServiceContract
{
    /**
     * @param CreateClientRequestDTO $createClientRequestDTO
     * @return CreateClientResponseDTO
     */
    public function create(CreateClientRequestDTO $createClientRequestDTO): CreateClientResponseDTO;
}

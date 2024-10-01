<?php

declare(strict_types=1);

namespace App\Client\Application\Service\GetClientByUUIDService;

use App\Client\Application\RequestDTO\GetClientByUUIDRequestDTO;
use App\Client\Application\ResponseDTO\GetClientByUUIDResponseDTO;

interface GetClientByUUIDServiceContract
{
    /**
     * @param GetClientByUUIDRequestDTO $getClientByUUIDRequestDTO
     * @return GetClientByUUIDResponseDTO
     */
    public function get(GetClientByUUIDRequestDTO $getClientByUUIDRequestDTO): GetClientByUUIDResponseDTO;
}

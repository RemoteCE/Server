<?php
declare(strict_types=1);

namespace App\Client\Application\Service\GetClientByUUIDService;

use App\Client\Application\RequestDTO\GetClientByUUIDRequestDTO;
use App\Client\Application\ResponseDTO\GetClientByUUIDResponseDTO;
use App\Client\Core\UseCases\Service\GetClientByUUIDServiceCase\GetClientByUUIDServiceCaseException;

interface GetClientByUUIDServiceContract
{
    /**
     * @param GetClientByUUIDRequestDTO $getClientByUUIDRequestDTO
     * @return GetClientByUUIDResponseDTO|null
     * @throws GetClientByUUIDServiceCaseException
     */
    public function get(GetClientByUUIDRequestDTO $getClientByUUIDRequestDTO): ?GetClientByUUIDResponseDTO;
}

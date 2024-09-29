<?php
declare(strict_types=1);

namespace App\Client\Application\API\GetClientByUUIDAPI;

use App\Client\Application\ResponseDTO\GetClientByUUIDResponseDTO;
use App\Client\Core\UseCases\API\GetClientByUUIDAPICase\GetClientByUUIDAPICaseException;

interface GetClientByUUIDAPIContract
{
    /**
     * @param string $uuid
     * @return GetClientByUUIDResponseDTO|null
     * @throws GetClientByUUIDAPICaseException
     */
    public function get(string $uuid): ?GetClientByUUIDResponseDTO;
}

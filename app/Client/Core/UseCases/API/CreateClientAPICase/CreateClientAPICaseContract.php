<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases\API\CreateClientAPICase;

use App\Client\Application\RequestDTO\CreateClientRequestDTO;
use App\Client\Infrastructure\Service\StatsService\StatsServiceException;

interface CreateClientAPICaseContract
{
    /**
     * @param CreateClientRequestDTO $clientRequestDTO
     * @return void
     * @throws StatsServiceException
     */
    public function create(CreateClientRequestDTO $clientRequestDTO): void;
}

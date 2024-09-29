<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases\Service\CreateClientServiceCase;

use App\Client\Application\RequestDTO\CreateClientRequestDTO;
use App\Client\Core\Domain\Entity\Client\ValueObject\UUIDValueObject;
use App\Client\Infrastructure\Service\StatsService\StatsServiceException;

interface CreateClientServiceCaseContract
{
    /**
     * @param UUIDValueObject $UUIDValueObject
     * @return void
     */
    public function create(UUIDValueObject $UUIDValueObject): void;
}

<?php

declare(strict_types=1);

namespace App\Client\Core\UseCases\Service\GetClientByUUIDServiceCase;

use App\Client\Core\Domain\Entity\Client\ValueObject\GetClientByUUIDValueObject\GetClientByUUIDValueObject;
use App\Client\Core\Domain\Entity\Client\ValueObject\UUIDValueObject;

interface GetClientByUUIDServiceCaseContract
{
    /**
     * @param UUIDValueObject $UUIDValueObject
     * @return GetClientByUUIDValueObject
     * @throws GetClientByUUIDServiceCaseException
     */
    public function get(UUIDValueObject $UUIDValueObject): GetClientByUUIDValueObject;
}

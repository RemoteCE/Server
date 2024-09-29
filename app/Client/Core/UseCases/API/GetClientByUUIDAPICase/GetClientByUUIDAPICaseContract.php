<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases\API\GetClientByUUIDAPICase;

use App\Client\Core\Domain\Entity\Client\ValueObject\ClientValueObject;
use App\Client\Core\Domain\Entity\Client\ValueObject\UUIDValueObject;

interface GetClientByUUIDAPICaseContract
{
    /**
     * @param UUIDValueObject $UUIDValueObject
     * @return ClientValueObject
     * @throws GetClientByUUIDAPICaseException
     */
    public function get(UUIDValueObject $UUIDValueObject): ClientValueObject;
}

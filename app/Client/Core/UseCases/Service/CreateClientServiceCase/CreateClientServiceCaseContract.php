<?php

declare(strict_types=1);

namespace App\Client\Core\UseCases\Service\CreateClientServiceCase;

use App\Client\Core\Domain\Entity\Client\ValueObject\CreateClientValueObject\CreateClientValueObject;
use App\Client\Core\Domain\Entity\Client\ValueObject\IpValueObject;
use App\Client\Core\Domain\Entity\Client\ValueObject\NameValueObject;

interface CreateClientServiceCaseContract
{
    /**
     * @param NameValueObject $nameValueObject
     * @param IpValueObject $ipValueObject
     * @return CreateClientValueObject
     */
    public function create(NameValueObject $nameValueObject, IpValueObject $ipValueObject): CreateClientValueObject;
}

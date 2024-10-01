<?php

declare(strict_types=1);

namespace App\Client\Application\Mapper\CreateClientMapper\CreateClientToValueObjectMapper;

use App\Client\Application\Mapper\ToValueObjectMapperContract;
use App\Client\Core\Domain\Entity\Client\ValueObject\IpValueObject;
use App\Client\Core\Domain\Entity\Client\ValueObject\NameValueObject;

interface CreateClientToValueObjectMapperContract extends ToValueObjectMapperContract
{
    public function toNameValueObject(): NameValueObject;

    public function toIpValueObject(): IpValueObject;
}

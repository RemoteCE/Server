<?php

declare(strict_types=1);

namespace App\Stats\Core\UseCases\Service\CreateStatsServiceCase;

use App\Stats\Core\Contracts\Database\Repository\StatsRepositoryContract;
use App\Stats\Core\Domain\Entity\Stats\Stats;
use App\Stats\Core\Domain\Entity\Stats\ValueObject\ClientIdValueObject;
use App\Stats\Core\Domain\Entity\Stats\ValueObject\StatusValueObject;

final readonly class CreateStatsServiceCase implements CreateStatsServiceCaseContract
{
    public function __construct(private StatsRepositoryContract $statsRepository)
    {
    }

    public function create(ClientIdValueObject $clientIdValueObject): StatusValueObject
    {
        return new StatusValueObject(
            $this->statsRepository->create(Stats::fromArray([
                'clientId' => $clientIdValueObject->getClientId()
            ]))
        );
    }

}

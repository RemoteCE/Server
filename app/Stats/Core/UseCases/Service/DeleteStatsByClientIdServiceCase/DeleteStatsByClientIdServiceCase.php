<?php

declare(strict_types=1);

namespace App\Stats\Core\UseCases\Service\DeleteStatsByClientIdServiceCase;

use App\Stats\Core\Domain\Entity\Stats\ValueObject\ClientIdValueObject;
use App\Stats\Core\Domain\Entity\Stats\ValueObject\StatusValueObject;
use App\Stats\Infrastructure\Database\Repository\StatsRepository\StatsRepository;

final readonly class DeleteStatsByClientIdServiceCase implements DeleteStatsByClientIdServiceCaseContract
{
    public function __construct(private StatsRepository $statsRepository)
    {
    }

    public function delete(ClientIdValueObject $clientIdValueObject): StatusValueObject
    {
        return new StatusValueObject(
            $this->statsRepository->deleteByClientId(
                $clientIdValueObject->getClientId()
            )
        );
    }
}

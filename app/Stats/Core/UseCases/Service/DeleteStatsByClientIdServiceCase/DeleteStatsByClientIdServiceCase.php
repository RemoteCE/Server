<?php
declare(strict_types=1);

namespace App\Stats\Core\UseCases\Service\DeleteStatsByClientIdServiceCase;

use App\Stats\Application\RequestDTO\DeleteStatsByClientIdRequestDTO;
use App\Stats\Infrastructure\Database\Repository\StatsRepository\StatsRepository;

final readonly class DeleteStatsByClientIdServiceCase implements DeleteStatsByClientIdServiceCaseContract
{
    public function __construct(private StatsRepository $statsRepository)
    {
    }

    public function delete(DeleteStatsByClientIdRequestDTO $deleteStatsByClientIdDTO): void
    {
        $this->statsRepository->deleteByClientId($deleteStatsByClientIdDTO->getClientId());
    }
}

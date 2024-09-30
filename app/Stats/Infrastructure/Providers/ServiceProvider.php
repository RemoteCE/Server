<?php
declare(strict_types=1);

namespace App\Stats\Infrastructure\Providers;

use App\Stats\Application\Service\CreateStatsService\CreateStatsService;
use App\Stats\Application\Service\CreateStatsService\CreateStatsServiceContract;
use App\Stats\Application\Service\DeleteStatsByClientIdService\DeleteStatsByClientIdService;
use App\Stats\Application\Service\DeleteStatsByClientIdService\DeleteStatsByClientIdServiceContract;
use App\Stats\Application\RequestDTOFactory\CreateStatsRequestDTOFactory\CreateStatsRequestDTOFactory;
use App\Stats\Application\RequestDTOFactory\CreateStatsRequestDTOFactory\CreateStatsRequestDTOFactoryContract;
use App\Stats\Application\RequestDTOFactory\DeleteStatsByClientIdRequestDTOFactory\DeleteStatsByClientIdRequestDTOFactory;
use App\Stats\Application\RequestDTOFactory\DeleteStatsByClientIdRequestDTOFactory\DeleteStatsByClientIdRequestDTOFactoryContract;
use App\Stats\Application\RequestDTOValidation\CreateStatsRequestDTOValidation\CreateStatsRequestDTOValidation;
use App\Stats\Application\RequestDTOValidation\CreateStatsRequestDTOValidation\CreateStatsRequestDTOValidationContract;
use App\Stats\Application\RequestDTOValidation\DeleteStatsByClientIdRequestDTOValidation\DeleteStatsByClientIdRequestDTOValidation;
use App\Stats\Application\RequestDTOValidation\DeleteStatsByClientIdRequestDTOValidation\DeleteStatsByClientIdRequestDTOValidationContract;
use App\Stats\Core\Contracts\Database\Repository\StatsRepositoryContract;
use App\Stats\Core\UseCases\Service\CreateStatsServiceCase\CreateStatsServiceCase;
use App\Stats\Core\UseCases\Service\CreateStatsServiceCase\CreateStatsServiceCaseContract;
use App\Stats\Core\UseCases\Service\DeleteStatsByClientIdServiceCase\DeleteStatsByClientIdServiceCase;
use App\Stats\Core\UseCases\Service\DeleteStatsByClientIdServiceCase\DeleteStatsByClientIdServiceCaseContract;
use App\Stats\Infrastructure\Database\Repository\StatsRepository\StatsRepository;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register(): void
    {
        // Service
        $this->app->bind(CreateStatsServiceContract::class, CreateStatsService::class);
        $this->app->bind(DeleteStatsByClientIdServiceContract::class, DeleteStatsByClientIdService::class);

        // RequestDTOFactory
        $this->app->bind(CreateStatsRequestDTOFactoryContract::class, CreateStatsRequestDTOFactory::class);
        $this->app->bind(DeleteStatsByClientIdRequestDTOFactoryContract::class, DeleteStatsByClientIdRequestDTOFactory::class);

        // RequestDTOValidation
        $this->app->bind(CreateStatsRequestDTOValidationContract::class, CreateStatsRequestDTOValidation::class);
        $this->app->bind(DeleteStatsByClientIdRequestDTOValidationContract::class, DeleteStatsByClientIdRequestDTOValidation::class);

        // ServiceUseCase
        $this->app->bind(CreateStatsServiceCaseContract::class, CreateStatsServiceCase::class);
        $this->app->bind(DeleteStatsByClientIdServiceCaseContract::class, DeleteStatsByClientIdServiceCase::class);

        // Repository
        $this->app->bind(StatsRepositoryContract::class, StatsRepository::class);
    }
}

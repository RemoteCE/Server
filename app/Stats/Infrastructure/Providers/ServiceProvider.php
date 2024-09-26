<?php
declare(strict_types=1);

namespace App\Stats\Infrastructure\Providers;

use App\Stats\Application\API\CreateStatsAPI\CreateStatsAPI;
use App\Stats\Application\API\CreateStatsAPI\CreateStatsAPIContract;
use App\Stats\Application\Contracts\Repository\StatsRepositoryContract;
use App\Stats\Application\Contracts\UseCases\CreateStatsCaseContract;
use App\Stats\Application\RequestDTOFactory\CreateStatsRequestDTOFactory\CreateStatsRequestDTOFactory;
use App\Stats\Application\RequestDTOFactory\CreateStatsRequestDTOFactory\CreateStatsRequestDTOFactoryContract;
use App\Stats\Application\RequestDTOValidation\CreateStatsRequestDTOValidation\CreateStatsRequestDTOValidation;
use App\Stats\Application\RequestDTOValidation\CreateStatsRequestDTOValidation\CreateStatsRequestDTOValidationContract;
use App\Stats\Core\UseCases\CreateStatsCase;
use App\Stats\Infrastructure\Database\Repository\StatsRepository;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register(): void
    {
        //API
        $this->app->bind(CreateStatsAPIContract::class, CreateStatsAPI::class);

        //RequestDTOFactory
        $this->app->bind(CreateStatsRequestDTOFactoryContract::class, CreateStatsRequestDTOFactory::class);

        //RequestDTOValidation
        $this->app->bind(CreateStatsRequestDTOValidationContract::class, CreateStatsRequestDTOValidation::class);

        //UseCase
        $this->app->bind(CreateStatsCaseContract::class, CreateStatsCase::class);

        //Repository
        $this->app->bind(StatsRepositoryContract::class, StatsRepository::class);
    }
}

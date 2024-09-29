<?php
declare(strict_types=1);

namespace App\Stats\Infrastructure\Providers;

use App\Stats\Application\API\CreateStatsAPI\CreateStatsAPI;
use App\Stats\Application\API\CreateStatsAPI\CreateStatsAPIContract;
use App\Stats\Application\API\DeleteStatsByClientIdAPI\DeleteStatsByClientIdAPI;
use App\Stats\Application\API\DeleteStatsByClientIdAPI\DeleteStatsByClientIdAPIContract;
use App\Stats\Application\RequestDTO\DeleteStatsByClientIdRequestDTO;
use App\Stats\Application\RequestDTOFactory\CreateStatsRequestDTOFactory\CreateStatsRequestDTOFactory;
use App\Stats\Application\RequestDTOFactory\CreateStatsRequestDTOFactory\CreateStatsRequestDTOFactoryContract;
use App\Stats\Application\RequestDTOFactory\DeleteStatsByClientIdRequestDTOFactory\DeleteStatsByClientIdRequestDTOFactory;
use App\Stats\Application\RequestDTOFactory\DeleteStatsByClientIdRequestDTOFactory\DeleteStatsByClientIdRequestDTOFactoryContract;
use App\Stats\Application\RequestDTOValidation\CreateStatsRequestDTOValidation\CreateStatsRequestDTOValidation;
use App\Stats\Application\RequestDTOValidation\CreateStatsRequestDTOValidation\CreateStatsRequestDTOValidationContract;
use App\Stats\Application\RequestDTOValidation\DeleteStatsByClientIdRequestDTOValidation\DeleteStatsByClientIdRequestDTOValidation;
use App\Stats\Application\RequestDTOValidation\DeleteStatsByClientIdRequestDTOValidation\DeleteStatsByClientIdRequestDTOValidationContract;
use App\Stats\Core\Contracts\Database\Repository\StatsRepositoryContract;
use App\Stats\Core\UseCases\API\CreateStatsAPICase\CreateStatsAPICase;
use App\Stats\Core\UseCases\API\CreateStatsAPICase\CreateStatsAPICaseContract;
use App\Stats\Core\UseCases\API\DeleteStatsByClientIdAPICase\DeleteStatsByClientIdAPICase;
use App\Stats\Core\UseCases\API\DeleteStatsByClientIdAPICase\DeleteStatsByClientIdAPICaseContract;
use App\Stats\Infrastructure\Database\Repository\StatsRepository\StatsRepository;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register(): void
    {
        //Service
        $this->app->bind(CreateStatsAPIContract::class, CreateStatsAPI::class);
        $this->app->bind(DeleteStatsByClientIdAPIContract::class, DeleteStatsByClientIdAPI::class);

        //RequestDTOFactory
        $this->app->bind(CreateStatsRequestDTOFactoryContract::class, CreateStatsRequestDTOFactory::class);
        $this->app->bind(DeleteStatsByClientIdRequestDTOFactoryContract::class, DeleteStatsByClientIdRequestDTOFactory::class);

        //RequestDTOValidation
        $this->app->bind(CreateStatsRequestDTOValidationContract::class, CreateStatsRequestDTOValidation::class);
        $this->app->bind(DeleteStatsByClientIdRequestDTOValidationContract::class, DeleteStatsByClientIdRequestDTOValidation::class);

        //UseCase
        $this->app->bind(CreateStatsAPICaseContract::class, CreateStatsAPICase::class);
        $this->app->bind(DeleteStatsByClientIdAPICASEContract::class, DeleteStatsByClientIdAPICase::class);

        //Repository
        $this->app->bind(StatsRepositoryContract::class, StatsRepository::class);
    }
}

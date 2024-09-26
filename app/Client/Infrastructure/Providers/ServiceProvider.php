<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Providers;

use App\Client\Application\API\CreateClientAPI\CreateClientAPI;
use App\Client\Application\API\CreateClientAPI\CreateClientAPIContract;
use App\Client\Application\RequestDTOFactory\CreateClientRequestDTOFactory\CreateClientRequestDTOFactory;
use App\Client\Application\RequestDTOFactory\CreateClientRequestDTOFactory\CreateClientRequestDTOFactoryContract;
use App\Client\Application\RequestDTOValidation\CreateClientRequestDTOValidation\CreateClientRequestDTOValidation;
use App\Client\Application\RequestDTOValidation\CreateClientRequestDTOValidation\CreateClientRequestDTOValidationContract;
use App\Client\Core\Contracts\Database\Repository\ClientRepositoryContract;
use App\Client\Core\Contracts\Service\StatsServiceContract;
use App\Client\Core\UseCases\CreateClientCase\CreateClientCase;
use App\Client\Core\UseCases\CreateClientCase\CreateClientCaseContract;
use App\Client\Core\UseCases\CreateStatsCase\CreateStatsCase;
use App\Client\Core\UseCases\CreateStatsCase\CreateStatsCaseContract;
use App\Client\Infrastructure\Database\Repository\ClientRepository;
use App\Client\Infrastructure\Service\StatsService\StatsService;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register(): void{
        //Event Service Provider
        $this->app->register(EventServiceProvider::class);

        //API
        $this->app->bind(CreateClientAPIContract::class, CreateClientAPI::class);

        //RequestDTOFactory
        $this->app->bind(CreateClientRequestDTOFactoryContract::class, CreateClientRequestDTOFactory::class);

        //RequestDTOValidation
        $this->app->bind(CreateClientRequestDTOValidationContract::class, CreateClientRequestDTOValidation::class);

        //UseCase
        $this->app->bind(CreateClientCaseContract::class, CreateClientCase::class);
        $this->app->bind(CreateStatsCaseContract::class, CreateStatsCase::class);

        //Repository
        $this->app->bind(ClientRepositoryContract::class, ClientRepository::class);

        //Service
        $this->app->bind(StatsServiceContract::class, StatsService::class);
    }
}

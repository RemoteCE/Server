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
use App\Client\Core\Contracts\Service\CommandServiceContract;
use App\Client\Core\Contracts\Service\StatsServiceContract;
use App\Client\Core\UseCases\API\CreateClientAPICase\CreateClientAPICase;
use App\Client\Core\UseCases\API\CreateClientAPICase\CreateClientAPICaseContract;
use App\Client\Core\UseCases\Domain\CreateCommandDomainCase\CreateCommandDomainCase;
use App\Client\Core\UseCases\Domain\CreateCommandDomainCase\CreateCommandDomainCaseContract;
use App\Client\Core\UseCases\Domain\CreateStatsDomainCase\CreateStatsDomainCase;
use App\Client\Core\UseCases\Domain\CreateStatsDomainCase\CreateStatsDomainCaseContract;
use App\Client\Core\UseCases\Domain\DeleteClientByIdDomainCase\DeleteClientByIdDomainCase;
use App\Client\Core\UseCases\Domain\DeleteClientByIdDomainCase\DeleteClientByIdDomainCaseContract;
use App\Client\Core\UseCases\Domain\DeleteCommandByClientIdDomainCase\DeleteCommandByClientIdDomainCase;
use App\Client\Core\UseCases\Domain\DeleteCommandByClientIdDomainCase\DeleteCommandByClientIdDomainCaseContract;
use App\Client\Core\UseCases\Domain\DeleteStatsByClientIdDomainCase\DeleteStatsByClientIdDomainCase;
use App\Client\Core\UseCases\Domain\DeleteStatsByClientIdDomainCase\DeleteStatsByClientIdDomainCaseContract;
use App\Client\Infrastructure\Database\Repository\ClientRepository\ClientRepository;
use App\Client\Infrastructure\Service\CommandService\CommandService;
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

        //APIUseCase
        $this->app->bind(CreateClientAPICaseContract::class, CreateClientAPICase::class);

        //DomainUseCase
        $this->app->bind(CreateCommandDomainCaseContract::class, CreateCommandDomainCase::class);
        $this->app->bind(CreateStatsDomainCaseContract::class, CreateStatsDomainCase::class);
        $this->app->bind(DeleteClientByIdDomainCaseContract::class, DeleteClientByIdDomainCase::class);
        $this->app->bind(DeleteStatsByClientIdDomainCaseContract::class, DeleteStatsByClientIdDomainCase::class);
        $this->app->bind(DeleteCommandByClientIdDomainCaseContract::class, DeleteCommandByClientIdDomainCase::class);

        //Repository
        $this->app->bind(ClientRepositoryContract::class, ClientRepository::class);

        //Service
        $this->app->bind(StatsServiceContract::class, StatsService::class);
        $this->app->bind(CommandServiceContract::class, CommandService::class);

    }
}

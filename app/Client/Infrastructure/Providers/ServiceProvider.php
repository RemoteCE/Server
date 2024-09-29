<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Providers;

use App\Client\Application\Mapper\CreateClientMapper\CreateClientMapper;
use App\Client\Application\Mapper\CreateClientMapper\CreateClientMapperContract;
use App\Client\Application\Mapper\GetClientByUUIDMapper\GetClientByUUIDMapper;
use App\Client\Application\Mapper\GetClientByUUIDMapper\GetClientByUUIDMapperContract;
use App\Client\Application\RequestDTOFactory\CreateClientRequestDTOFactory\CreateClientRequestDTOFactory;
use App\Client\Application\RequestDTOFactory\CreateClientRequestDTOFactory\CreateClientRequestDTOFactoryContract;
use App\Client\Application\RequestDTOFactory\GetClientByUUIDRequestDTOFactory\GetClientByUUIDRequestDTOFactory;
use App\Client\Application\RequestDTOFactory\GetClientByUUIDRequestDTOFactory\GetClientByUUIDRequestDTOFactoryContract;
use App\Client\Application\RequestDTOValidation\CreateClientRequestDTOValidation\CreateClientRequestDTOValidation;
use App\Client\Application\RequestDTOValidation\CreateClientRequestDTOValidation\CreateClientRequestDTOValidationContract;
use App\Client\Application\RequestDTOValidation\GetClientByUUIDRequestDTOValidation\GetClientByUUIDRequestDTOValidation;
use App\Client\Application\RequestDTOValidation\GetClientByUUIDRequestDTOValidation\GetClientByUUIDRequestDTOValidationContract;
use App\Client\Application\Service\CreateClientService\CreateClientService;
use App\Client\Application\Service\CreateClientService\CreateClientServiceContract;
use App\Client\Application\Service\GetClientByUUIDService\GetClientByUUIDService;
use App\Client\Application\Service\GetClientByUUIDService\GetClientByUUIDServiceContract;
use App\Client\Core\Contracts\Database\Repository\ClientRepositoryContract;
use App\Client\Core\Contracts\External\CommandExternalContract;
use App\Client\Core\Contracts\External\StatsExternalContract;
use App\Client\Core\UseCases\Service\CreateClientServiceCase\CreateClientServiceCase;
use App\Client\Core\UseCases\Service\CreateClientServiceCase\CreateClientServiceCaseContract;
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
use App\Client\Core\UseCases\Service\GetClientByUUIDServiceCase\GetClientByUUIDServiceCase;
use App\Client\Core\UseCases\Service\GetClientByUUIDServiceCase\GetClientByUUIDServiceCaseContract;
use App\Client\Infrastructure\Database\Repository\ClientRepository\ClientRepository;
use App\Client\Infrastructure\External\CommandExternal\CommandExternal;
use App\Client\Infrastructure\External\StatsExternal\StatsExternal;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register(): void{
        // Event External Provider
        $this->app->register(EventServiceProvider::class);

        // External
        $this->app->bind(CreateClientServiceContract::class, CreateClientService::class);
        $this->app->bind(GetClientByUUIDServiceContract::class, GetClientByUUIDService::class);

        // RequestDTOFactory
        $this->app->bind(CreateClientRequestDTOFactoryContract::class, CreateClientRequestDTOFactory::class);
        $this->app->bind(GetClientByUUIDRequestDTOFactoryContract::class, GetClientByUUIDRequestDTOFactory::class);

        // RequestDTOValidation
        $this->app->bind(CreateClientRequestDTOValidationContract::class, CreateClientRequestDTOValidation::class);
        $this->app->bind(GetClientByUUIDRequestDTOValidationContract::class, GetClientByUUIDRequestDTOValidation::class);

        // Mappers
        $this->app->bind(CreateClientMapperContract::class, CreateClientMapper::class);
        $this->app->bind(GetClientByUUIDMapperContract::class, GetClientByUUIDMapper::class);

        // ServiceUseCase
        $this->app->bind(CreateClientServiceCaseContract::class, CreateClientServiceCase::class);
        $this->app->bind(GetClientByUUIDServiceCaseContract::class, GetClientByUUIDServiceCase::class);

        //DomainUseCase
        $this->app->bind(CreateCommandDomainCaseContract::class, CreateCommandDomainCase::class);
        $this->app->bind(CreateStatsDomainCaseContract::class, CreateStatsDomainCase::class);
        $this->app->bind(DeleteClientByIdDomainCaseContract::class, DeleteClientByIdDomainCase::class);
        $this->app->bind(DeleteStatsByClientIdDomainCaseContract::class, DeleteStatsByClientIdDomainCase::class);
        $this->app->bind(DeleteCommandByClientIdDomainCaseContract::class, DeleteCommandByClientIdDomainCase::class);

        // Repository
        $this->app->bind(ClientRepositoryContract::class, ClientRepository::class);

        // External External
        $this->app->bind(StatsExternalContract::class, StatsExternal::class);
        $this->app->bind(CommandExternalContract::class, CommandExternal::class);

    }
}

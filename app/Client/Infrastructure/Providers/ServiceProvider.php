<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Providers;

use App\Client\Application\API\CreateClientAPI\CreateClientAPI;
use App\Client\Application\API\CreateClientAPI\CreateClientAPIContract;
use App\Client\Application\Contracts\Repository\ClientRepositoryContract;
use App\Client\Application\Contracts\UseCases\CreateClientCaseContract;
use App\Client\Application\RequestDTOFactory\CreateClientRequestDTOFactory\CreateClientRequestDTOFactory;
use App\Client\Application\RequestDTOFactory\CreateClientRequestDTOFactory\CreateClientRequestDTOFactoryContract;
use App\Client\Application\RequestDTOValidation\CreateClientRequestDTOValidation\CreateClientRequestDTOValidation;
use App\Client\Application\RequestDTOValidation\CreateClientRequestDTOValidation\CreateClientRequestDTOValidationContract;
use App\Client\Core\UseCases\CreateClientCase;
use App\Client\Infrastructure\Database\Repository\ClientRepository;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register(): void{
        //API
        $this->app->bind(CreateClientAPIContract::class, CreateClientAPI::class);

        //RequestDTOFactory
        $this->app->bind(CreateClientRequestDTOFactoryContract::class, CreateClientRequestDTOFactory::class);

        //RequestDTOValidation
        $this->app->bind(CreateClientRequestDTOValidationContract::class, CreateClientRequestDTOValidation::class);

        //UseCase
        $this->app->bind(CreateClientCaseContract::class, CreateClientCase::class);

        //Repository
        $this->app->bind(ClientRepositoryContract::class, ClientRepository::class);
    }
}

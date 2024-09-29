<?php
declare(strict_types=1);

namespace App\Command\Infrastructure\Providers;

use App\Command\Application\API\CreateCommandAPI\CreateCommandAPI;
use App\Command\Application\API\CreateCommandAPI\CreateCommandAPIContract;
use App\Command\Application\API\DeleteCommandByClientIdAPI\DeleteCommandByClientIdAPI;
use App\Command\Application\API\DeleteCommandByClientIdAPI\DeleteCommandByClientIdAPIContract;
use App\Command\Application\API\UpdateCommandByClientIdAPI\UpdateCommandByClientIdAPI;
use App\Command\Application\API\UpdateCommandByClientIdAPI\UpdateCommandByClientIdAPIContract;
use App\Command\Application\RequestDTOFactory\CreateCommandRequestDTOFactory\CreateCommandRequestDTOFactory;
use App\Command\Application\RequestDTOFactory\CreateCommandRequestDTOFactory\CreateCommandRequestDTOFactoryContract;
use App\Command\Application\RequestDTOFactory\DeleteCommandByClientIdRequestDTOFactory\DeleteCommandByClientIdRequestDTOFactory;
use App\Command\Application\RequestDTOFactory\DeleteCommandByClientIdRequestDTOFactory\DeleteCommandByClientIdRequestDTOFactoryContract;
use App\Command\Application\RequestDTOFactory\UpdateCommandByClientIdRequestDTOFactory\UpdateCommandByClientIdRequestDTOFactory;
use App\Command\Application\RequestDTOFactory\UpdateCommandByClientIdRequestDTOFactory\UpdateCommandByClientIdRequestDTOFactoryContract;
use App\Command\Application\RequestDTOValidation\CreateCommandRequestDTOValidation\CreateCommandRequestDTOValidation;
use App\Command\Application\RequestDTOValidation\CreateCommandRequestDTOValidation\CreateCommandRequestDTOValidationContract;
use App\Command\Application\RequestDTOValidation\DeleteCommandByClientIdRequestDTOValidation\DeleteCommandByClientIdRequestDTOValidation;
use App\Command\Application\RequestDTOValidation\DeleteCommandByClientIdRequestDTOValidation\DeleteCommandByClientIdRequestDTOValidationContract;
use App\Command\Application\RequestDTOValidation\UpdateCommandByClientIdRequestDTOValidation\UpdateCommandByClientIdRequestDTOValidation;
use App\Command\Application\RequestDTOValidation\UpdateCommandByClientIdRequestDTOValidation\UpdateCommandByClientIdRequestDTOValidationContract;
use App\Command\Core\Contracts\Database\Repository\CommandRepositoryContract;
use App\Command\Core\UseCases\API\CreateCommandAPICase\CreateCommandAPICase;
use App\Command\Core\UseCases\API\CreateCommandAPICase\CreateCommandAPICaseContract;
use App\Command\Core\UseCases\API\DeleteCommandByClientIdAPICase\DeleteCommandByClientIdAPICase;
use App\Command\Core\UseCases\API\DeleteCommandByClientIdAPICase\DeleteCommandByClientIdAPICaseContract;
use App\Command\Core\UseCases\API\UpdateCommandByClientIdAPICase\UpdateCommandByClientIdAPICase;
use App\Command\Core\UseCases\API\UpdateCommandByClientIdAPICase\UpdateCommandByClientIdAPICaseContract;
use App\Command\Infrastructure\Database\Repository\CommandRepository\CommandRepository;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register(): void{
        // External
        $this->app->bind(CreateCommandAPIContract::class, CreateCommandAPI::class);
        $this->app->bind(DeleteCommandByClientIdAPIContract::class, DeleteCommandByClientIdAPI::class);
        $this->app->bind(UpdateCommandByClientIdAPIContract::class, UpdateCommandByClientIdAPI::class);

        // RequestDTOFactory
        $this->app->bind(CreateCommandRequestDTOFactoryContract::class, CreateCommandRequestDTOFactory::class);
        $this->app->bind(DeleteCommandByClientIdRequestDTOFactoryContract::class, DeleteCommandByClientIdRequestDTOFactory::class);
        $this->app->bind(UpdateCommandByClientIdRequestDTOFactoryContract::class, UpdateCommandByClientIdRequestDTOFactory::class);

        // RequestDTOValidation
        $this->app->bind(CreateCommandRequestDTOValidationContract::class, CreateCommandRequestDTOValidation::class);
        $this->app->bind(DeleteCommandByClientIDRequestDTOValidationContract::class, DeleteCommandByClientIdRequestDTOValidation::class);
        $this->app->bind(UpdateCommandByClientIdRequestDTOValidationContract::class, UpdateCommandByClientIdRequestDTOValidation::class);

        // APIUseCase
        $this->app->bind(CreateCommandAPICaseContract::class, CreateCommandAPICase::class);
        $this->app->bind(DeleteCommandByClientIdAPICaseContract::class, DeleteCommandByClientIdAPICase::class);
        $this->app->bind(UpdateCommandByClientIdAPICaseContract::class, UpdateCommandByClientIdAPICase::class);

        // Repository
        $this->app->bind(CommandRepositoryContract::class, CommandRepository::class);
    }
}

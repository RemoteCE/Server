<?php
declare(strict_types=1);

namespace App\Command\Infrastructure\Providers;

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
use App\Command\Application\Service\CreateCommandService\CreateCommandService;
use App\Command\Application\Service\CreateCommandService\CreateCommandServiceContract;
use App\Command\Application\Service\DeleteCommandByClientIdService\DeleteCommandByClientIdService;
use App\Command\Application\Service\DeleteCommandByClientIdService\DeleteCommandByClientIdServiceContract;
use App\Command\Application\Service\UpdateCommandByClientIdService\UpdateCommandByClientIdService;
use App\Command\Application\Service\UpdateCommandByClientIdService\UpdateCommandByClientIdServiceContract;
use App\Command\Core\Contracts\Database\Repository\CommandRepositoryContract;
use App\Command\Core\UseCases\Service\CreateCommandServiceCase\CreateCommandServiceCase;
use App\Command\Core\UseCases\Service\CreateCommandServiceCase\CreateCommandServiceCaseContract;
use App\Command\Core\UseCases\Service\DeleteCommandByClientIdServiceCase\DeleteCommandByClientIdServiceCase;
use App\Command\Core\UseCases\Service\DeleteCommandByClientIdServiceCase\DeleteCommandByClientIdServiceCaseContract;
use App\Command\Core\UseCases\Service\UpdateCommandByClientIdServiceCase\UpdateCommandByClientIdServiceCase;
use App\Command\Core\UseCases\Service\UpdateCommandByClientIdServiceCase\UpdateCommandByClientIdServiceCaseContract;
use App\Command\Infrastructure\Database\Repository\CommandRepository\CommandRepository;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register(): void{
        // Service
        $this->app->bind(CreateCommandServiceContract::class, CreateCommandService::class);
        $this->app->bind(DeleteCommandByClientIdServiceContract::class, DeleteCommandByClientIdService::class);
        $this->app->bind(UpdateCommandByClientIdServiceContract::class, UpdateCommandByClientIdService::class);

        // RequestDTOFactory
        $this->app->bind(CreateCommandRequestDTOFactoryContract::class, CreateCommandRequestDTOFactory::class);
        $this->app->bind(DeleteCommandByClientIdRequestDTOFactoryContract::class, DeleteCommandByClientIdRequestDTOFactory::class);
        $this->app->bind(UpdateCommandByClientIdRequestDTOFactoryContract::class, UpdateCommandByClientIdRequestDTOFactory::class);

        // RequestDTOValidation
        $this->app->bind(CreateCommandRequestDTOValidationContract::class, CreateCommandRequestDTOValidation::class);
        $this->app->bind(DeleteCommandByClientIDRequestDTOValidationContract::class, DeleteCommandByClientIdRequestDTOValidation::class);
        $this->app->bind(UpdateCommandByClientIdRequestDTOValidationContract::class, UpdateCommandByClientIdRequestDTOValidation::class);

        // ServiceUseCase
        $this->app->bind(CreateCommandServiceCaseContract::class, CreateCommandServiceCase::class);
        $this->app->bind(DeleteCommandByClientIdServiceCaseContract::class, DeleteCommandByClientIdServiceCase::class);
        $this->app->bind(UpdateCommandByClientIdServiceCaseContract::class, UpdateCommandByClientIdServiceCase::class);

        // Repository
        $this->app->bind(CommandRepositoryContract::class, CommandRepository::class);
    }
}

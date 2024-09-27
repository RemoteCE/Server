<?php
declare(strict_types=1);

namespace App\Command\Infrastructure\Providers;

use App\Command\Application\API\CreateCommandAPI\CreateCommandAPI;
use App\Command\Application\API\CreateCommandAPI\CreateCommandAPIContract;
use App\Command\Application\RequestDTOFactory\CreateCommandRequestDTOFactory\CreateCommandRequestDTOFactory;
use App\Command\Application\RequestDTOFactory\CreateCommandRequestDTOFactory\CreateCommandRequestDTOFactoryContract;
use App\Command\Application\RequestDTOValidation\CreateCommandRequestDTOValidation\CreateCommandRequestDTOValidation;
use App\Command\Application\RequestDTOValidation\CreateCommandRequestDTOValidation\CreateCommandRequestDTOValidationContract;
use App\Command\Core\Contracts\Database\Repository\CommandRepositoryContract;
use App\Command\Core\UseCases\API\CreateCommandAPICase\CreateCommandAPICase;
use App\Command\Core\UseCases\API\CreateCommandAPICase\CreateCommandAPICaseContract;
use App\Command\Infrastructure\Database\Repository\CommandRepository\CommandRepository;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register(): void{
        // API
        $this->app->bind(CreateCommandAPIContract::class, CreateCommandAPI::class);

        // RequestDTOFactory
        $this->app->bind(CreateCommandRequestDTOFactoryContract::class, CreateCommandRequestDTOFactory::class);

        // RequestDTOValidation
        $this->app->bind(CreateCommandRequestDTOValidationContract::class, CreateCommandRequestDTOValidation::class);

        // APIUseCase
        $this->app->bind(CreateCommandAPICaseContract::class, CreateCommandAPICase::class);

        // Repository
        $this->app->bind(CommandRepositoryContract::class, CommandRepository::class);
    }
}

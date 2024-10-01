<?php

declare(strict_types=1);

namespace App\Command\Presentation\API\CreateCommandAPI;

use App\Command\Application\RequestDTOFactory\CreateCommandRequestDTOFactory\CreateCommandRequestDTOFactoryContract;
use App\Command\Application\Service\CreateCommandService\CreateCommandServiceContract;
use Exception;
use Illuminate\Http\Exceptions\HttpResponseException;

final readonly class CreateCommandAPI implements CreateCommandAPIContract
{
    public function __construct(
        private CreateCommandServiceContract $createCommandService,
        private CreateCommandRequestDTOFactoryContract $createCommandRequestDTOFactory
    ) {
    }

    public function create(int $clientId): void
    {
        try {
            $this->createCommandService->create(
                $this->createCommandRequestDTOFactory->create($clientId)
            );
        } catch (Exception $exception) {
            throw new HttpResponseException(response()->json()->setJson($exception->getMessage()));
        }
    }
}

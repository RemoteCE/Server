<?php

declare(strict_types=1);

namespace App\Command\Presentation\API\CreateCommandAPI;

use App\Command\Application\RequestDTOFactory\CreateCommandRequestDTOFactory\CreateCommandRequestDTOFactoryContract;
use App\Command\Application\RequestDTOValidation\RequestDTOValidationException;
use App\Command\Application\Service\CreateCommandService\CreateCommandServiceContract;
use Illuminate\Http\JsonResponse;

final readonly class CreateCommandAPI implements CreateCommandAPIContract
{
    public function __construct(
        private CreateCommandServiceContract $createCommandService,
        private CreateCommandRequestDTOFactoryContract $createCommandRequestDTOFactory
    ) {
    }

    public function create(string $clientId): JsonResponse
    {
        try {
            return response()->json()->setJson(
                $this->createCommandService->create(
                    $this->createCommandRequestDTOFactory->create($clientId)
                )->toJson()
            );
        } catch (RequestDTOValidationException $exception) {
            return response()->json()->setJson($exception->getMessage());
        }
    }
}

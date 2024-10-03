<?php

declare(strict_types=1);

namespace App\Command\Presentation\API\CreateCommandAPI;

use App\Command\Application\RequestDTOFactory\CreateCommandRequestDTOFactory\CreateCommandRequestDTOFactoryContract;
use App\Command\Application\RequestDTOValidation\RequestDTOValidationException;
use App\Command\Application\Service\CreateCommandService\CreateCommandServiceContract;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final readonly class CreateCommandAPI
{
    public function __construct(
        private CreateCommandServiceContract $createCommandService,
        private CreateCommandRequestDTOFactoryContract $createCommandRequestDTOFactory
    ) {
    }

    public function create(array $data): JsonResponse
    {
        try {
            return response()->json()->setJson(
                $this->createCommandService->create(
                    $this->createCommandRequestDTOFactory->create($data)
                )->toJson()
            );
        } catch (RequestDTOValidationException $exception) {
            return response()->json()->setJson(
                $exception->getMessage()
            )->setStatusCode(Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }
}

<?php

declare(strict_types=1);

namespace App\Command\Presentation\API\UpdateCommandByClientIdAPI;

use App\Command\Application\RequestDTOFactory\UpdateCommandByClientIdRequestDTOFactory\UpdateCommandByClientIdRequestDTOFactoryContract;
use App\Command\Application\RequestDTOValidation\RequestDTOValidationException;
use App\Command\Application\Service\UpdateCommandByClientIdService\UpdateCommandByClientIdServiceContract;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final readonly class UpdateCommandByClientIdAPI
{
    public function __construct(
        private UpdateCommandByClientIdServiceContract $updateCommandByClientIdService,
        private UpdateCommandByClientIdRequestDTOFactoryContract $updateCommandByClientIdRequestDTOFactory
    ) {
    }

    public function update(array $data): JsonResponse
    {
        try {
            return response()->json()->setJson(
                $this->updateCommandByClientIdService->update(
                    $this->updateCommandByClientIdRequestDTOFactory->create($data)
                )->toJson()
            );
        } catch (RequestDTOValidationException $exception) {
            return response()->json()->setJson(
                $exception->getMessage()
            )->setStatusCode(Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }
}

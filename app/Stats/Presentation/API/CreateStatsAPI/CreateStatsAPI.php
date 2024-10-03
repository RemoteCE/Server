<?php

declare(strict_types=1);

namespace App\Stats\Presentation\API\CreateStatsAPI;

use App\Stats\Application\RequestDTOFactory\CreateStatsRequestDTOFactory\CreateStatsRequestDTOFactoryContract;
use App\Stats\Application\RequestDTOValidation\RequestDTOValidationException;
use App\Stats\Application\Service\CreateStatsService\CreateStatsServiceContract;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final readonly class CreateStatsAPI
{
    public function __construct(
        private CreateStatsServiceContract $createStatsService,
        private CreateStatsRequestDTOFactoryContract $createStatsRequestDTOFactory
    ) {
    }

    public function create(array $data): JsonResponse
    {
        try {
            return response()->json()->setJson(
                $this->createStatsService->create(
                    $this->createStatsRequestDTOFactory->create($data)
                )->toJson()
            );
        } catch (RequestDTOValidationException $exception) {
            return response()->json()->setJson(
                $exception->getMessage()
            )->setStatusCode(
                Response::HTTP_UNPROCESSABLE_ENTITY
            );
        }
    }
}

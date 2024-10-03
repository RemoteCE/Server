<?php

declare(strict_types=1);

namespace App\Stats\Presentation\API\DeleteStatsByClientIdAPI;

use App\Stats\Application\RequestDTOFactory\DeleteStatsByClientIdRequestDTOFactory\DeleteStatsByClientIdRequestDTOFactoryContract;
use App\Stats\Application\RequestDTOValidation\RequestDTOValidationException;
use App\Stats\Application\Service\DeleteStatsByClientIdService\DeleteStatsByClientIdServiceContract;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final readonly class DeleteStatsByClientIdAPI
{
    public function __construct(
        private DeleteStatsByClientIdServiceContract $deleteStatsByClientIdService,
        private DeleteStatsByClientIdRequestDTOFactoryContract $deleteStatsByClientIdRequestDTOFactory
    ) {
    }

    public function delete(array $data): JsonResponse
    {
        try {
            return response()->json()->setJson(
                $this->deleteStatsByClientIdService->delete(
                    $this->deleteStatsByClientIdRequestDTOFactory->create($data)
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

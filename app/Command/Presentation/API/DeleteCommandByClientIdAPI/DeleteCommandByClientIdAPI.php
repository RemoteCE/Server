<?php

declare(strict_types=1);

namespace App\Command\Presentation\API\DeleteCommandByClientIdAPI;

use App\Command\Application\RequestDTOFactory\DeleteCommandByClientIdRequestDTOFactory\DeleteCommandByClientIdRequestDTOFactoryContract;
use App\Command\Application\RequestDTOValidation\RequestDTOValidationException;
use App\Command\Application\Service\DeleteCommandByClientIdService\DeleteCommandByClientIdServiceContract;
use Illuminate\Http\JsonResponse;

final readonly class DeleteCommandByClientIdAPI implements DeleteCommandByClientIdAPIContract
{
    public function __construct(
        private DeleteCommandByClientIdServiceContract $deleteCommandByClientIdService,
        private DeleteCommandByClientIdRequestDTOFactoryContract $deleteCommandByClientIdRequestDTOFactory
    ) {
    }

    public function delete(string $clientId): JsonResponse
    {
        try {
            return response()->json()->setJson(
                $this->deleteCommandByClientIdService->delete(
                    $this->deleteCommandByClientIdRequestDTOFactory->create($clientId)
                )->toJson()
            );
        } catch (RequestDTOValidationException $exception) {
            return response()->json()->setJson($exception->getMessage());
        }
    }
}

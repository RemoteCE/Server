<?php

declare(strict_types=1);

namespace App\Command\Presentation\API\UpdateCommandByClientIdAPI;

use App\Command\Application\RequestDTOFactory\UpdateCommandByClientIdRequestDTOFactory\UpdateCommandByClientIdRequestDTOFactoryContract;
use App\Command\Application\RequestDTOValidation\RequestDTOValidationException;
use App\Command\Application\Service\UpdateCommandByClientIdService\UpdateCommandByClientIdServiceContract;
use Illuminate\Http\JsonResponse;

final readonly class UpdateCommandByClientIdAPI implements UpdateCommandByClientIdAPIContract
{
    public function __construct(
        private UpdateCommandByClientIdServiceContract $updateCommandByClientIdService,
        private UpdateCommandByClientIdRequestDTOFactoryContract $updateCommandByClientIdRequestDTOFactory
    ) {
    }

    public function update(string $clientId, ?string $newClientId, ?string $command, ?string $response): JsonResponse
    {
        try {
            return response()->json()->setJson(
                $this->updateCommandByClientIdService->update(
                    $this->updateCommandByClientIdRequestDTOFactory->create(
                        $clientId,
                        $newClientId,
                        $command,
                        $response
                    )
                )->toJson()
            );
        } catch (RequestDTOValidationException $exception) {
            return response()->json()->setJson($exception->getMessage());
        }
    }
}

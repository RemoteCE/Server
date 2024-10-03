<?php

declare(strict_types=1);

namespace App\Client\Presentation\API\CreateClientAPI;

use App\Client\Application\RequestDTOFactory\CreateClientRequestDTOFactory\CreateClientRequestDTOFactoryContract;
use App\Client\Application\RequestDTOValidation\RequestDTOValidationException;
use App\Client\Application\Service\CreateClientService\CreateClientServiceContract;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final readonly class CreateClientAPI
{
    public function __construct(
        private CreateClientServiceContract $createClientService,
        private CreateClientRequestDTOFactoryContract $createClientRequestDTOFactory
    ) {
    }

    public function create(array $data): JsonResponse
    {
        try {
            return response()->json()->setJson(
                $this->createClientService->create(
                    $this->createClientRequestDTOFactory->create($data)
                )->toJson()
            );
        } catch (RequestDTOValidationException $exception) {
            return response()->json()->setJson(
                $exception->getMessage()
            )->setStatusCode(Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }
}

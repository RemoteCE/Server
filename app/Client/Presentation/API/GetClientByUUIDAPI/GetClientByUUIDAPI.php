<?php

declare(strict_types=1);

namespace App\Client\Presentation\API\GetClientByUUIDAPI;

use App\Client\Application\RequestDTOFactory\GetClientByUUIDRequestDTOFactory\GetClientByUUIDRequestDTOFactoryContract;
use App\Client\Application\RequestDTOValidation\RequestDTOValidationException;
use App\Client\Application\Service\GetClientByUUIDService\GetClientByUUIDServiceContract;
use App\Client\Core\UseCases\Service\GetClientByUUIDServiceCase\GetClientByUUIDServiceCaseException;
use Symfony\Component\HttpFoundation\Response;

final readonly class GetClientByUUIDAPI
{
    public function __construct(
        private GetClientByUUIDServiceContract $getClientByUUIDService,
        private GetClientByUUIDRequestDTOFactoryContract $getClientByUUIDRequestDTOFactory
    ) {
    }

    public function get(string $uuid): Response
    {
        try {
            return response()->json()->setJson(
                $this->getClientByUUIDService->get(
                    $this->getClientByUUIDRequestDTOFactory->create($uuid)
                )->toJson()
            );
        } catch (RequestDTOValidationException $exception) {
            return response()->json()->setJson(
                $exception->getMessage()
            )->setStatusCode(Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }
}

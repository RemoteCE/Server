<?php
declare(strict_types=1);

namespace App\Client\Presentation\API\CreateClientAPI;

use App\Client\Application\RequestDTOFactory\CreateClientRequestDTOFactory\CreateClientRequestDTOFactoryContract;
use App\Client\Application\RequestDTOValidation\RequestDTOValidationException;
use App\Client\Application\Service\CreateClientService\CreateClientServiceContract;

final readonly class CreateClientAPI
{
    public function __construct(
        private CreateClientServiceContract $createClientService,
        private CreateClientRequestDTOFactoryContract $createClientRequestDTOFactory
    )
    {
    }

    public function create(string $uuid): \Illuminate\Foundation\Application|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse|\Illuminate\Contracts\Routing\ResponseFactory
    {
        try{
            $this->createClientService->create(
                $this->createClientRequestDTOFactory->create($uuid)
            );
        } catch (RequestDTOValidationException $exception){
            return response()->json()->setJson($exception->getMessage());
        }

        return response();
    }
}

<?php
declare(strict_types=1);

namespace App\Client\Application\API\CreateClientAPI;

use App\Client\Application\Contracts\UseCases\CreateClientCaseContract;
use App\Client\Application\RequestDTOFactory\CreateClientRequestDTOFactory\CreateClientRequestDTOFactoryContract;
use App\Client\Application\RequestDTOValidation\CreateClientRequestDTOValidation\CreateClientRequestDTOValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

final readonly class CreateClientAPI implements CreateClientAPIContract
{
    public function __construct(private CreateClientRequestDTOFactoryContract $createClientRequestDTOFactory, private CreateClientCaseContract $createClientCase)
    {

    }

    public function create(string $uuid): void
    {
        try{
            $this->createClientCase->create(
                $this->createClientRequestDTOFactory->create($uuid)
            );
        }
        catch (CreateClientRequestDTOValidationException $e){
            throw new HttpResponseException(response()->json()->setJson($e->getMessage()));
        }

    }
}

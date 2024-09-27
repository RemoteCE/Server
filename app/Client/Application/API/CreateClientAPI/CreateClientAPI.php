<?php
declare(strict_types=1);

namespace App\Client\Application\API\CreateClientAPI;

use App\Client\Application\RequestDTOFactory\CreateClientRequestDTOFactory\CreateClientRequestDTOFactoryContract;
use App\Client\Core\UseCases\API\CreateClientAPICase\CreateClientAPICaseContract;
use Exception;
use Illuminate\Http\Exceptions\HttpResponseException;

final readonly class CreateClientAPI implements CreateClientAPIContract
{
    public function __construct(private CreateClientRequestDTOFactoryContract $createClientRequestDTOFactory, private CreateClientAPICaseContract $createClientAPICase)
    {

    }

    public function create(string $uuid): void
    {
        try{
            $this->createClientAPICase->create(
                $this->createClientRequestDTOFactory->create($uuid)
            );
        }
        catch (Exception $e){
            throw new HttpResponseException(response()->json()->setJson($e->getMessage()));
        }

    }
}

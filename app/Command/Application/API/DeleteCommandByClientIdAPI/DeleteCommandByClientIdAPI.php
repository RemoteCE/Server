<?php
declare(strict_types=1);

namespace App\Command\Application\API\DeleteCommandByClientIdAPI;

use App\Command\Application\RequestDTOFactory\DeleteCommandByClientIdRequestDTOFactory\DeleteCommandByClientIdRequestDTOFactoryContract;
use App\Command\Core\UseCases\API\DeleteCommandByClientIdAPICase\DeleteCommandByClientIdAPICaseContract;
use Exception;
use Illuminate\Http\Exceptions\HttpResponseException;

final readonly class DeleteCommandByClientIdAPI implements DeleteCommandByClientIdAPIContract
{
    public function __construct(
        private DeleteCommandByClientIdRequestDTOFactoryContract $deleteCommandByClientIdRequestDTOFactory,
        private DeleteCommandByClientIdAPICaseContract $deleteCommandByClientIdAPICase
    )
    {

    }


    public function delete(int $clientId): void
    {
        try{
            $this->deleteCommandByClientIdAPICase->delete(
                $this->deleteCommandByClientIdRequestDTOFactory->create($clientId)
            );
        } catch (Exception $e){
            throw new HttpResponseException(response()->json($e->getMessage()));
        }
    }
}

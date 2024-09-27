<?php
declare(strict_types=1);

namespace App\Stats\Application\API\DeleteStatsByClientIdAPI;

use App\Stats\Application\API\DeleteStatsByClientIdAPI\DeleteStatsByClientIdAPIContract;
use App\Stats\Application\RequestDTOFactory\DeleteStatsByClientIdRequestDTOFactory\DeleteStatsByClientIdRequestDTOFactoryContract;
use App\Stats\Application\RequestDTOValidation\DeleteStatsByClientIdRequestDTOValidation\DeleteStatsByClientIdRequestDTOValidationContract;
use App\Stats\Core\UseCases\API\DeleteStatsByClientIdAPICase\DeleteStatsByClientIdAPICaseContract;
use Illuminate\Http\Exceptions\HttpResponseException;

final readonly class DeleteStatsByClientIdAPI implements DeleteStatsByClientIdAPIContract
{
    public function __construct(
        private DeleteStatsByClientIdAPICaseContract $deleteStatsByClientIdAPICase,
        private DeleteStatsByClientIdRequestDTOFactoryContract $deleteStatsByClientIdDTOFactory
    )
    {
    }

    public function delete(int $clientId): void
    {
        try{
            $this->deleteStatsByClientIdAPICase->delete(
                $this->deleteStatsByClientIdDTOFactory->create($clientId)
            );
        } catch (\Exception $e){
            throw new HttpResponseException(response()->json($e->getMessage()));
        }
    }
}

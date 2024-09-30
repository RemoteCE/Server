<?php
declare(strict_types=1);

namespace App\Stats\Application\Service\DeleteStatsByClientIdService;

use App\Stats\Application\RequestDTOFactory\DeleteStatsByClientIdRequestDTOFactory\DeleteStatsByClientIdRequestDTOFactoryContract;
use App\Stats\Core\UseCases\Service\DeleteStatsByClientIdServiceCase\DeleteStatsByClientIdServiceCaseContract;
use Exception;
use Illuminate\Http\Exceptions\HttpResponseException;

final readonly class DeleteStatsByClientIdService implements DeleteStatsByClientIdServiceContract
{
    public function __construct(
        private DeleteStatsByClientIdServiceCaseContract       $deleteStatsByClientIdServiceCase,
        private DeleteStatsByClientIdRequestDTOFactoryContract $deleteStatsByClientIdDTOFactory
    )
    {
    }

    public function delete(int $clientId): void
    {
        try{
            $this->deleteStatsByClientIdServiceCase->delete(
                $this->deleteStatsByClientIdDTOFactory->create($clientId)
            );
        } catch (Exception $e){
            throw new HttpResponseException(response()->json($e->getMessage()));
        }
    }
}

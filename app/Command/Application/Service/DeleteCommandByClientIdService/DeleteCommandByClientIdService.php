<?php
declare(strict_types=1);

namespace App\Command\Application\Service\DeleteCommandByClientIdService;

use App\Command\Application\RequestDTOFactory\DeleteCommandByClientIdRequestDTOFactory\DeleteCommandByClientIdRequestDTOFactoryContract;
use App\Command\Core\UseCases\Service\DeleteCommandByClientIdServiceCase\DeleteCommandByClientIdServiceCaseContract;
use Exception;
use Illuminate\Http\Exceptions\HttpResponseException;

final readonly class DeleteCommandByClientIdService implements DeleteCommandByClientIdServiceContract
{
    public function __construct(
        private DeleteCommandByClientIdRequestDTOFactoryContract $deleteCommandByClientIdRequestDTOFactory,
        private DeleteCommandByClientIdServiceCaseContract $deleteCommandByClientIdServiceCase
    )
    {

    }


    public function delete(int $clientId): void
    {
        try{
            $this->deleteCommandByClientIdServiceCase->delete(
                $this->deleteCommandByClientIdRequestDTOFactory->create($clientId)
            );
        } catch (Exception $e){
            throw new HttpResponseException(response()->json($e->getMessage()));
        }
    }
}

<?php

declare(strict_types=1);

namespace App\Command\Presentation\API\DeleteCommandByClientIdAPI;

use App\Command\Application\RequestDTOFactory\DeleteCommandByClientIdRequestDTOFactory\DeleteCommandByClientIdRequestDTOFactoryContract;
use App\Command\Application\Service\DeleteCommandByClientIdService\DeleteCommandByClientIdServiceContract;
use Illuminate\Http\Exceptions\HttpResponseException;

final readonly class DeleteCommandByClientIdAPI implements DeleteCommandByClientIdAPIContract
{
    public function __construct(
        private DeleteCommandByClientIdServiceContract $deleteCommandByClientIdService,
        private DeleteCommandByClientIdRequestDTOFactoryContract $deleteCommandByClientIdRequestDTOFactory
    ) {
    }

    public function delete(int $clientId): void
    {
        try {
            $this->deleteCommandByClientIdService->delete(
                $this->deleteCommandByClientIdRequestDTOFactory->create($clientId)
            );
        } catch (\Exception $exception) {
            throw new HttpResponseException(response()->json()->setJson($exception->getMessage()));
        }
    }
}

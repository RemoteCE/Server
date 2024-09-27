<?php
declare(strict_types=1);

namespace App\Command\Application\API\CreateCommandAPI;

use App\Command\Application\RequestDTOFactory\CreateCommandRequestDTOFactory\CreateCommandRequestDTOFactoryContract;
use App\Command\Core\UseCases\API\CreateCommandAPICase\CreateCommandAPICaseContract;
use Exception;
use Illuminate\Http\Exceptions\HttpResponseException;

final readonly class CreateCommandAPI implements CreateCommandAPIContract
{
    public function __construct(
        private CreateCommandAPICaseContract $createCommandAPICase,
        private CreateCommandRequestDTOFactoryContract $createCommandRequestDTOFactory
    )
    {

    }

    public function create(int $clientId): void
    {
        try {
            $this->createCommandAPICase->createCommand(
                $this->createCommandRequestDTOFactory->create($clientId)
            );
        } catch (Exception $e){
            throw new HttpResponseException(response()->json($e->getMessage()));
        }
    }
}

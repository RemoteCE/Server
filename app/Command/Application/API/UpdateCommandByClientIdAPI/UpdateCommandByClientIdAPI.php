<?php
declare(strict_types=1);

namespace App\Command\Application\API\UpdateCommandByClientIdAPI;

use App\Command\Application\RequestDTOFactory\UpdateCommandByClientIdRequestDTOFactory\UpdateCommandByClientIdRequestDTOFactoryContract;
use App\Command\Core\UseCases\API\UpdateCommandByClientIdAPICase\UpdateCommandByClientIdAPICaseContract;
use Exception;
use Illuminate\Http\Exceptions\HttpResponseException;

final readonly class UpdateCommandByClientIdAPI implements UpdateCommandByClientIdAPIContract
{
    public function __construct(
        private UpdateCommandByClientIdRequestDTOFactoryContract $updateCommandByClientIdRequestDTOFactory,
        private UpdateCommandByClientIdAPICaseContract $updateCommandByClientIdAPICase
    )
    {
    }

    public function update(int $clientId, ?string $command, ?string $response): void
    {
        try {
            $this->updateCommandByClientIdAPICase->update(
                $this->updateCommandByClientIdRequestDTOFactory->create($clientId, $command, $response)
            );
        } catch (Exception $e){
            throw new HttpResponseException(response()->json()->setJson($e->getMessage()));
        }
    }

}

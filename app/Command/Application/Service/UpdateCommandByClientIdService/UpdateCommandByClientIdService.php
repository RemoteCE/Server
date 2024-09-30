<?php
declare(strict_types=1);

namespace App\Command\Application\Service\UpdateCommandByClientIdService;

use App\Command\Application\RequestDTOFactory\UpdateCommandByClientIdRequestDTOFactory\UpdateCommandByClientIdRequestDTOFactoryContract;
use App\Command\Core\UseCases\Service\UpdateCommandByClientIdServiceCase\UpdateCommandByClientIdServiceCaseContract;
use Exception;
use Illuminate\Http\Exceptions\HttpResponseException;

final readonly class UpdateCommandByClientIdService implements UpdateCommandByClientIdServiceContract
{
    public function __construct(
        private UpdateCommandByClientIdRequestDTOFactoryContract $updateCommandByClientIdRequestDTOFactory,
        private UpdateCommandByClientIdServiceCaseContract $updateCommandByClientIdServiceCase
    )
    {
    }

    public function update(int $clientId, ?string $command, ?string $response): void
    {
        try {
            $this->updateCommandByClientIdServiceCase->update(
                $this->updateCommandByClientIdRequestDTOFactory->create($clientId, $command, $response)
            );
        } catch (Exception $e){
            throw new HttpResponseException(response()->json()->setJson($e->getMessage()));
        }
    }

}

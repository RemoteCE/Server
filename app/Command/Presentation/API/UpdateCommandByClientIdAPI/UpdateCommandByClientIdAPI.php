<?php

declare(strict_types=1);

namespace App\Command\Presentation\API\UpdateCommandByClientIdAPI;

use App\Command\Application\RequestDTOFactory\UpdateCommandByClientIdRequestDTOFactory\UpdateCommandByClientIdRequestDTOFactoryContract;
use App\Command\Application\Service\UpdateCommandByClientIdService\UpdateCommandByClientIdServiceContract;
use Illuminate\Http\Exceptions\HttpResponseException;

final readonly class UpdateCommandByClientIdAPI implements UpdateCommandByClientIdAPIContract
{
    public function __construct(
        private UpdateCommandByClientIdServiceContract $updateCommandByClientIdService,
        private UpdateCommandByClientIdRequestDTOFactoryContract $updateCommandByClientIdRequestDTOFactory
    ) {
    }

    public function update(int $clientId, ?string $command, ?string $response): void
    {
        try {
            $this->updateCommandByClientIdService->update(
                $this->updateCommandByClientIdRequestDTOFactory->create($clientId, $command, $response)
            );
        } catch (\Exception $exception) {
            throw new HttpResponseException(response()->json()->setJson($exception->getMessage()));
        }
    }
}

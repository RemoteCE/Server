<?php
declare(strict_types=1);

namespace App\Stats\Application\API\CreateStatsAPI;

use App\Stats\Application\RequestDTOFactory\CreateStatsRequestDTOFactory\CreateStatsRequestDTOFactoryContract;
use App\Stats\Application\RequestDTOValidation\CreateStatsRequestDTOValidation\CreateStatsRequestDTOValidationException;
use App\Stats\Core\UseCases\API\CreateStatsAPICase\CreateStatsAPICaseContract;
use Illuminate\Http\Exceptions\HttpResponseException;

final readonly class CreateStatsAPI implements CreateStatsAPIContract
{
    public function __construct(private CreateStatsAPICaseContract $createStatsCase, private CreateStatsRequestDTOFactoryContract $createStatsRequestDTOFactory)
    {
    }


    public function create(int $clientId): void
    {
        try {
            $this->createStatsCase->create(
                $this->createStatsRequestDTOFactory->create($clientId),
            );
        } catch (CreateStatsRequestDTOValidationException $e) {
            throw new HttpResponseException(response()->json()->setJson($e->getMessage()));
        }
    }

}

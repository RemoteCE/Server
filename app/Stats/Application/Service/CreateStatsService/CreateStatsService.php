<?php
declare(strict_types=1);

namespace App\Stats\Application\Service\CreateStatsService;

use App\Stats\Application\RequestDTOFactory\CreateStatsRequestDTOFactory\CreateStatsRequestDTOFactoryContract;
use App\Stats\Application\RequestDTOValidation\CreateStatsRequestDTOValidation\CreateStatsRequestDTOValidationException;
use App\Stats\Core\UseCases\Service\CreateStatsServiceCase\CreateStatsServiceCaseContract;
use Illuminate\Http\Exceptions\HttpResponseException;

final readonly class CreateStatsService implements CreateStatsServiceContract
{
    public function __construct(private CreateStatsServiceCaseContract $createStatsCase, private CreateStatsRequestDTOFactoryContract $createStatsRequestDTOFactory)
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

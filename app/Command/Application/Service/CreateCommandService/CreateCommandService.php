<?php
declare(strict_types=1);

namespace App\Command\Application\Service\CreateCommandService;

use App\Command\Application\RequestDTOFactory\CreateCommandRequestDTOFactory\CreateCommandRequestDTOFactoryContract;
use App\Command\Core\UseCases\Service\CreateCommandServiceCase\CreateCommandServiceCaseContract;
use Exception;
use Illuminate\Http\Exceptions\HttpResponseException;

final readonly class CreateCommandService implements CreateCommandServiceContract
{
    public function __construct(
        private CreateCommandServiceCaseContract       $createCommandServiceCase,
        private CreateCommandRequestDTOFactoryContract $createCommandRequestDTOFactory
    )
    {

    }

    public function create(int $clientId): void
    {
        try {
            $this->createCommandServiceCase->create(
                $this->createCommandRequestDTOFactory->create($clientId)
            );
        } catch (Exception $e){
            throw new HttpResponseException(response()->json($e->getMessage()));
        }
    }
}

<?php
declare(strict_types=1);

namespace App\Client\Application\Service\CreateClientService;

use App\Client\Application\Mapper\CreateClientMapper\CreateClientMapperContract;
use App\Client\Application\RequestDTO\CreateClientRequestDTO;
use App\Client\Core\UseCases\Service\CreateClientServiceCase\CreateClientServiceCaseContract;

final readonly class CreateClientService implements CreateClientServiceContract
{
    public function __construct(
        private CreateClientMapperContract $createClientMapper,
        private CreateClientServiceCaseContract $createClientAPICase
    )
    {

    }

    public function create(CreateClientRequestDTO $createClientRequestDTO): void
    {
        $this->createClientAPICase->create(
            $this->createClientMapper->toVO(
                $createClientRequestDTO
            )
        );
    }
}

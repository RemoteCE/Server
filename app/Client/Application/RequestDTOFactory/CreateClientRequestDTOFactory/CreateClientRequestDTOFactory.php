<?php
declare(strict_types=1);

namespace App\Client\Application\RequestDTOFactory\CreateClientRequestDTOFactory;

use App\Client\Application\RequestDTO\CreateClientRequestDTO;
use App\Client\Application\RequestDTOValidation\CreateClientRequestDTOValidation\CreateClientRequestDTOValidationContract;

final readonly class CreateClientRequestDTOFactory implements CreateClientRequestDTOFactoryContract
{
    public function __construct(private CreateClientRequestDTOValidationContract $createClientRequestDTOValidation)
    {
    }

    public function create(string $uuid): CreateClientRequestDTO
    {
        $CreateClientRequestDTO = new CreateClientRequestDTO($uuid);
        $this->createClientRequestDTOValidation->validate($CreateClientRequestDTO);

        return $CreateClientRequestDTO;
    }

}

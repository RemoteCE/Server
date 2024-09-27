<?php
declare(strict_types=1);

namespace App\Command\Application\RequestDTOFactory\DeleteCommandByClientIdRequestDTOFactory;

use App\Command\Application\RequestDTO\DeleteCommandByClientIdRequestDTO;
use App\Command\Application\RequestDTOValidation\DeleteCommandByClientIdRequestDTOValidation\DeleteCommandByClientIdRequestDTOValidationContract;

final readonly class DeleteCommandByClientIdRequestDTOFactory implements DeleteCommandByClientIdRequestDTOFactoryContract
{
    public function __construct(private DeleteCommandByClientIdRequestDTOValidationContract $deleteCommandByClientIdRequestDTOValidation)
    {
    }

    public function create(int $clientId): DeleteCommandByClientIdRequestDTO
    {
        $DeleteCommandByClientIdRequestDTO = new DeleteCommandByClientIdRequestDTO($clientId);
        $this->deleteCommandByClientIdRequestDTOValidation->validate($DeleteCommandByClientIdRequestDTO);
        return $DeleteCommandByClientIdRequestDTO;
    }
}

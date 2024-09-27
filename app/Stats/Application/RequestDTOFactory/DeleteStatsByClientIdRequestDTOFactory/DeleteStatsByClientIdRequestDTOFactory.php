<?php
declare(strict_types=1);

namespace App\Stats\Application\RequestDTOFactory\DeleteStatsByClientIdRequestDTOFactory;

use App\Stats\Application\RequestDTO\DeleteStatsByClientIdRequestDTO;
use App\Stats\Application\RequestDTOFactory\DeleteStatsByClientIdRequestDTOFactory\DeleteStatsByClientIdRequestDTOFactoryContract;
use App\Stats\Application\RequestDTOValidation\DeleteStatsByClientIdRequestDTOValidation\DeleteStatsByClientIdRequestDTOValidationContract;

class DeleteStatsByClientIdRequestDTOFactory implements DeleteStatsByClientIdRequestDTOFactoryContract
{
    public function __construct(private DeleteStatsByClientIdRequestDTOValidationContract $deleteStatsByClientIdDTOValidation)
    {

    }

    public function create(int $clientId): DeleteStatsByClientIdRequestDTO
    {
        $DeleteStatsByClientIdDTO = new DeleteStatsByClientIdRequestDTO($clientId);
        $this->deleteStatsByClientIdDTOValidation->validate($DeleteStatsByClientIdDTO);
        return $DeleteStatsByClientIdDTO;

    }
}

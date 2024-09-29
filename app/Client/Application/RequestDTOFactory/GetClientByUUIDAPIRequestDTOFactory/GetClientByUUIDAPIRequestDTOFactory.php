<?php
declare(strict_types=1);

namespace App\Client\Application\RequestDTOFactory\GetClientByUUIDAPIRequestDTOFactory;

use App\Client\Application\RequestDTO\GetClientByUUIDRequestDTO;
use App\Client\Application\RequestDTOValidation\GetClientByUUIDAPIRequestDTOValidation\GetClientByUUIDAPIRequestDTOValidationContract;

final readonly class GetClientByUUIDAPIRequestDTOFactory implements GetClientByUUIDAPIRequestDTOFactoryContract
{
    public function __construct(private GetClientByUUIDAPIRequestDTOValidationContract $getClientByUUIDAPIRequestDTOValidation)
    {
    }

    public function create(string $uuid): GetClientByUUIDRequestDTO
    {
        $GetClientByUUIDRequestDTO = new GetClientByUUIDRequestDTO($uuid);
        $this->getClientByUUIDAPIRequestDTOValidation->validate($GetClientByUUIDRequestDTO);
        return $GetClientByUUIDRequestDTO;
    }
}

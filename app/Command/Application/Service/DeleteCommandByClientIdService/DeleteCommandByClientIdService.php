<?php

declare(strict_types=1);

namespace App\Command\Application\Service\DeleteCommandByClientIdService;

use App\Command\Application\Mapper\DeleteCommandMapper\DeleteCommandByClientIdToDTOMapper\DeleteCommandByClientIdToDTOMapper;
use App\Command\Application\Mapper\DeleteCommandMapper\DeleteCommandByClientIdToValueObjectMapper\DeleteCommandByClientIdToValueObjectMapper;
use App\Command\Application\RequestDTO\DeleteCommandByClientIdRequestDTO;
use App\Command\Application\ResponseDTO\DeleteCommandByClientIdResponseDTO;
use App\Command\Core\UseCases\Service\DeleteCommandByClientIdServiceCase\DeleteCommandByClientIdServiceCaseContract;

final readonly class DeleteCommandByClientIdService implements DeleteCommandByClientIdServiceContract
{
    public function __construct(
        private DeleteCommandByClientIdServiceCaseContract $deleteCommandByClientIdServiceCase
    ) {
    }


    public function delete(
        DeleteCommandByClientIdRequestDTO $deleteCommandByClientIdRequestDTO
    ): DeleteCommandByClientIdResponseDTO {
        return DeleteCommandByClientIdToDTOMapper::map(
            $this->deleteCommandByClientIdServiceCase->delete(
                DeleteCommandByClientIdToValueObjectMapper::map(
                    $deleteCommandByClientIdRequestDTO
                )->toClientIdValueObject()
            )
        )->toResponseDTO();
    }
}

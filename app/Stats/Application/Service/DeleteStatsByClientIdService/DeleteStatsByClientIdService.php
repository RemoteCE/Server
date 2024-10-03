<?php

declare(strict_types=1);

namespace App\Stats\Application\Service\DeleteStatsByClientIdService;

use App\Stats\Application\Mapper\DeleteStatsByClientIdMapper\DeleteStatsByClientIdToDTOMapper\DeleteStatsByClientIdToDTOMapper;
use App\Stats\Application\Mapper\DeleteStatsByClientIdMapper\DeleteStatsByClientIdToValueObjectMapper\DeleteStatsByClientIdToValueObjectMapper;
use App\Stats\Application\RequestDTO\DeleteStatsByClientIdRequestDTO;
use App\Stats\Application\ResponseDTO\DeleteStatsByClientIdResponseDTO;
use App\Stats\Core\UseCases\Service\DeleteStatsByClientIdServiceCase\DeleteStatsByClientIdServiceCaseContract;

final readonly class DeleteStatsByClientIdService implements DeleteStatsByClientIdServiceContract
{
    public function __construct(
        private DeleteStatsByClientIdServiceCaseContract $deleteStatsByClientIdServiceCase,
    ) {
    }

    public function delete(
        DeleteStatsByClientIdRequestDTO $deleteStatsByClientIdRequestDTO
    ): DeleteStatsByClientIdResponseDTO {
        return DeleteStatsByClientIdToDTOMapper::map(
            $this->deleteStatsByClientIdServiceCase->delete(
                DeleteStatsByClientIdToValueObjectMapper::map($deleteStatsByClientIdRequestDTO)
                    ->toClientIdValueObject()
            )
        )->toResponseDTO();
    }
}

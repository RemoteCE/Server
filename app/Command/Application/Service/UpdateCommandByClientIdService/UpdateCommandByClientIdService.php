<?php

declare(strict_types=1);

namespace App\Command\Application\Service\UpdateCommandByClientIdService;

use App\Command\Application\Mapper\UpdateCommandByClientIdMapper\UpdateCommandByClientIdToDTOMapper\UpdateCommandByClientIdToDTOMapper;
use App\Command\Application\Mapper\UpdateCommandByClientIdMapper\UpdateCommandByClientIdToValueObjectMapper\UpdateCommandByClientIdToValueObjectMapper;
use App\Command\Application\RequestDTO\UpdateCommandByClientIdRequestDTO;
use App\Command\Application\ResponseDTO\UpdateCommandByClientIdResponseDTO;
use App\Command\Core\UseCases\Service\UpdateCommandByClientIdServiceCase\UpdateCommandByClientIdServiceCaseContract;

final readonly class UpdateCommandByClientIdService implements UpdateCommandByClientIdServiceContract
{
    public function __construct(
        private UpdateCommandByClientIdServiceCaseContract $updateCommandByClientIdServiceCase
    ) {
    }

    public function update(
        UpdateCommandByClientIdRequestDTO $updateCommandByClientIdRequestDTO
    ): UpdateCommandByClientIdResponseDTO {
        return UpdateCommandByClientIdToDTOMapper::map(
            $this->updateCommandByClientIdServiceCase->update(
                UpdateCommandByClientIdToValueObjectMapper::map(
                    $updateCommandByClientIdRequestDTO
                )->toClientIdValueObject(),
                UpdateCommandByClientIdToValueObjectMapper::map(
                    $updateCommandByClientIdRequestDTO
                )->toCommandValueObject()
            )
        )->toResponseDTO();
    }

}

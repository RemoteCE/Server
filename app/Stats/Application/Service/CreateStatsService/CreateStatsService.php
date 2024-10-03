<?php

declare(strict_types=1);

namespace App\Stats\Application\Service\CreateStatsService;

use App\Stats\Application\Mapper\CreateStatsMapper\CreateStatsToDTOMapper\CreateStatsToDTOMapper;
use App\Stats\Application\Mapper\CreateStatsMapper\CreateStatsToValueObjectMapper\CreateStatsToValueObjectMapper;
use App\Stats\Application\RequestDTO\CreateStatsRequestDTO;
use App\Stats\Application\ResponseDTO\CreateStatsResponseDTO;
use App\Stats\Core\UseCases\Service\CreateStatsServiceCase\CreateStatsServiceCaseContract;

final readonly class CreateStatsService implements CreateStatsServiceContract
{
    public function __construct(
        private CreateStatsServiceCaseContract $createStatsCase
    ) {
    }


    public function create(CreateStatsRequestDTO $createStatsRequestDTO): CreateStatsResponseDTO
    {
        return CreateStatsToDTOMapper::map(
            $this->createStatsCase->create(
                CreateStatsToValueObjectMapper::map($createStatsRequestDTO)->toClientIdValueObject()
            )
        )->toResponseDTO();
    }

}

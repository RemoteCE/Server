<?php

declare(strict_types=1);

namespace App\Command\Application\Service\CreateCommandService;

use App\Command\Application\Mapper\CreateCommandMapper\CreateCommandToDTOMapper\CreateCommandToDTOMapper;
use App\Command\Application\Mapper\CreateCommandMapper\CreateCommandToValueObjectMapper\CreateCommandToValueObjectMapper;
use App\Command\Application\RequestDTO\CreateCommandRequestDTO;
use App\Command\Application\ResponseDTO\CreateCommandResponseDTO;
use App\Command\Core\UseCases\Service\CreateCommandServiceCase\CreateCommandServiceCaseContract;

final readonly class CreateCommandService implements CreateCommandServiceContract
{
    public function __construct(
        private CreateCommandServiceCaseContract $createCommandServiceCase
    ) {
    }

    public function create(CreateCommandRequestDTO $createCommandRequestDTO): CreateCommandResponseDTO
    {
        return CreateCommandToDTOMapper::map(
            $this->createCommandServiceCase->create(
                CreateCommandToValueObjectMapper::map($createCommandRequestDTO)->toClientId()
            )
        )->toResponseDTO();
    }
}

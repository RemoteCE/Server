<?php
declare(strict_types=1);

namespace App\Command\Core\UseCases\Service\UpdateCommandByClientIdServiceCase;

use App\Command\Application\RequestDTO\UpdateCommandByClientIdRequestDTO;

interface UpdateCommandByClientIdServiceCaseContract
{
    public function update(UpdateCommandByClientIdRequestDTO $updateCommandByClientIdRequestDTO): void;
}

<?php
declare(strict_types=1);

namespace App\Command\Core\UseCases\API\UpdateCommandByClientIdAPICase;

use App\Command\Application\RequestDTO\UpdateCommandByClientIdRequestDTO;

interface UpdateCommandByClientIdAPICaseContract
{
    public function update(UpdateCommandByClientIdRequestDTO $updateCommandByClientIdRequestDTO): void;
}

<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Service\CommandService\DeleteCommandByClientId;

use App\Command\Application\API\DeleteCommandByClientIdAPI\DeleteCommandByClientIdAPIContract;

final readonly class DeleteCommandByClientId
{
    public function __construct(private DeleteCommandByClientIdAPIContract $deleteCommandByClientIdAPI)
    {
    }

    public function delete(int $clientId): void{
        $this->deleteCommandByClientIdAPI->delete($clientId);
    }
}

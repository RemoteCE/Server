<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\External\CommandExternal\CreateCommand;

use App\Client\Core\Domain\Entity\Client\Client;
use App\Command\Application\Service\CreateCommandService\CreateCommandServiceContract;
use Exception;

final readonly class CreateCommand
{
    public function __construct(private CreateCommandServiceContract $createCommandAPI)
    {
    }

    /**
     * @param Client $client
     * @return void
     * @throws CommandExternalCreateCommandException
     */
    public function createCommand(Client $client): void
    {
        try{
            $this->createCommandAPI->create($client->getId());
        } catch (Exception $e){
            throw new CommandExternalCreateCommandException($e->getMessage());
        }
    }
}

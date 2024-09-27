<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Service\CommandService\CreateCommand;

use App\Client\Core\Domain\Entity\Client\Client;
use App\Command\Application\API\CreateCommandAPI\CreateCommandAPIContract;
use Exception;

final readonly class CreateCommand
{
    public function __construct(private CreateCommandAPIContract $createCommandAPI)
    {
    }

    /**
     * @param Client $client
     * @return void
     * @throws CommandServiceCreateCommandException
     */
    public function createCommand(Client $client): void
    {
        try{
            $this->createCommandAPI->create($client->getId());
        } catch (Exception $e){
            throw new CommandServiceCreateCommandException($e->getMessage());
        }
    }
}

<?php
declare(strict_types=1);

namespace App\Client\Infrastructure\Service\CommandService\CreateCommand;

use App\Command\Application\API\CreateCommandAPI\CreateCommandAPIContract;
use Exception;

final readonly class CreateCommand
{
    public function __construct(private CreateCommandAPIContract $createCommandAPI)
    {
    }

    /**
     * @param int $userId
     * @return void
     * @throws CommandServiceCreateCommandException
     */
    public function createCommand(int $userId): void
    {
        try{
            $this->createCommandAPI->create($userId);
        } catch (Exception $e){
            throw new CommandServiceCreateCommandException($e->getMessage());
        }
    }
}

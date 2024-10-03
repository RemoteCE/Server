<?php

declare(strict_types=1);

namespace App\Command\Core\Domain\Entity\Command\ValueObject;

use App\Command\Core\Domain\Entity\ValueObjectContract;

final readonly class CommandValueObject implements ValueObjectContract
{
    public function __construct(
        private ?int $id,
        private int $clientId,
        private ?string $command,
        private ?string $response,
    ) {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClientId(): int
    {
        return $this->clientId;
    }

    public function getCommand(): ?string
    {
        return $this->command;
    }

    public function getResponse(): ?string
    {
        return $this->response;
    }

}

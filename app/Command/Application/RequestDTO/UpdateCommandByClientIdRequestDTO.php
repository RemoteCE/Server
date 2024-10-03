<?php

declare(strict_types=1);

namespace App\Command\Application\RequestDTO;

final readonly class UpdateCommandByClientIdRequestDTO implements RequestDTOContract
{
    public function __construct(
        private int $clientId,
        private ?int $newClientId,
        private ?string $command,
        private ?string $response
    ) {
    }

    public function getClientId(): int
    {
        return $this->clientId;
    }

    public function getNewClientId(): ?int
    {
        return $this->newClientId;
    }


    public function getCommand(): ?string
    {
        return $this->command;
    }

    public function getResponse(): ?string
    {
        return $this->response;
    }

    public function toArray(): array
    {
        return [
            'newClientId' => $this->newClientId,
            'clientId' => $this->clientId,
            'command' => $this->command,
            'response' => $this->response,
        ];
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['clientId'],
            $data['newClientId'] ?? null,
            $data['command'] ?? null,
            $data['response'] ?? null
        );
    }
}

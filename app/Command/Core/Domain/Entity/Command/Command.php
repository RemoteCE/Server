<?php
declare(strict_types=1);

namespace App\Command\Core\Domain\Entity\Command;

use App\Command\Core\Domain\Entity\EntityContract;

final readonly class Command implements EntityContract
{
    public function __construct(
        private ?int $id,
        private int $clientId,
        private ?string $command,
        private ?string $response,
    )
    {
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

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'clientId' => $this->clientId,
            'command' => $this->command,
            'response' => $this->response,
        ];
    }

    /**
     * @inheritDoc
     */
    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

    /**
     * @inheritDoc
     */
    public static function fromArray(array $data): EntityContract
    {
        return new self($data['id'] ?? null, $data['clientId'], $data['command'] ?? null, $data['response'] ?? null);
    }
}

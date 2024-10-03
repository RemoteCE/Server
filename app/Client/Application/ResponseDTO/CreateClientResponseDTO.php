<?php

declare(strict_types=1);

namespace App\Client\Application\ResponseDTO;

final readonly class CreateClientResponseDTO implements ResponseDTOContract
{

    public function __construct(
        private bool $status,
        private ?string $uuid
    ) {
    }

    public function getStatus(): bool
    {
        return $this->status;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }


    public function toArray(): array
    {
        return [
            'status' => $this->status,
            'uuid' => $this->uuid,
        ];
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

    public static function fromArray(array $data): self
    {
        return new self($data['status'], $data['uuid'] ?? null);
    }
}

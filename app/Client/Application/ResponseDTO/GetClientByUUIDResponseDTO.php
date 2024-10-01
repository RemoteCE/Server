<?php

declare(strict_types=1);

namespace App\Client\Application\ResponseDTO;

final readonly class GetClientByUUIDResponseDTO implements ResponseDTOContract
{
    public function __construct(
        private bool $status,
        private ?int $id,
        private ?string $uuid,
        private ?string $name,
        private ?string $ip
    ) {
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function getStatus(): bool
    {
        return $this->status;
    }


    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'status' => $this->status,
        ];
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

}

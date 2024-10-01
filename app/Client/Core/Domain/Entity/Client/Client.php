<?php

declare(strict_types=1);

namespace App\Client\Core\Domain\Entity\Client;


use App\Client\Core\Domain\Entity\EntityContract;

final readonly class Client implements EntityContract
{
    public function __construct(
        private ?int $id,
        private string $uuid,
        private ?string $name,
        private ?string $ip
    ) {
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }


    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'name' => $this->name,
            'ip' => $this->ip,
        ];
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

    public static function fromArray(array $data): Client
    {
        return new self($data['id'] ?? null, $data['uuid'], $data['name'] ?? null, $data['ip'] ?? null);
    }


}

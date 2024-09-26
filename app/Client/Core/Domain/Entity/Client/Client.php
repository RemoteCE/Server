<?php
declare(strict_types=1);

namespace App\Client\Core\Domain\Entity\Client;


use App\Client\Core\Domain\Entity\EntityContract;

final readonly class Client implements EntityContract
{
    public function __construct(private ?int $id, private string $uuid){

    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
        ];
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

    public static function fromArray(array $data): Client
    {
        return new self($data['id'] ?? null, $data['uuid']);
    }


}

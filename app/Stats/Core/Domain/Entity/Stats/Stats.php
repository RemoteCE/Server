<?php
declare(strict_types=1);

namespace App\Stats\Core\Domain\Entity\Stats;

use App\Stats\Core\Domain\Entity\EntityContract;

final class Stats implements EntityContract
{
    public function __construct(private readonly ?int $id, private readonly int $clientId, private ?int $lastActive)
    {
        $this->lastActive = $lastActive ?? time();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClientId(): int
    {
        return $this->clientId;
    }

    public function getLastActive(): int
    {
        return $this->lastActive;
    }


    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'userId' => $this->clientId,
            'lastActive' => $this->lastActive,
        ];
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

    public static function fromArray(array $data): EntityContract
    {
        return new self($data['id'] ?? null, $data['clientId'], $data['lastActive'] ?? null);
    }

}

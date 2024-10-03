<?php

declare(strict_types=1);

namespace App\Stats\Application\RequestDTO;

final readonly class CreateStatsRequestDTO implements RequestDTOContract
{
    public function __construct(private int $clientId)
    {
    }
    
    public function getClientId(): int
    {
        return $this->clientId;
    }

    public function toArray(): array
    {
        return [
            'clientId' => $this->clientId,
        ];
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

    public static function fromArray(array $data): self
    {
        return new self($data['clientId']);
    }

}

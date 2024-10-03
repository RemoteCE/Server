<?php

declare(strict_types=1);

namespace App\Stats\Application\ResponseDTO;

final readonly class CreateStatsResponseDTO implements ResponseDTOContract
{

    public function __construct(
        private bool $status
    ) {
    }

    public function getStatus(): bool
    {
        return $this->status;
    }


    public function toArray(): array
    {
        return [
            'status' => $this->status
        ];
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

    public static function fromArray(array $data): self
    {
        return new self($data['status']);
    }
}

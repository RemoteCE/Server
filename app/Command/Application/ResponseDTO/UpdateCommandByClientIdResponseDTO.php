<?php

declare(strict_types=1);

namespace App\Command\Application\ResponseDTO;

final readonly class UpdateCommandByClientIdResponseDTO implements ResponseDTOContract
{
    public function __construct(
        private bool $status,
    ) {
    }

    public function getStatus(): bool
    {
        return $this->status;
    }

    public function toArray(): array
    {
        return [
            'status' => $this->status,
        ];
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }


}

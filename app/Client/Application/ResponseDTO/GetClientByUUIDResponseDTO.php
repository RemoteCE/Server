<?php
declare(strict_types=1);

namespace App\Client\Application\ResponseDTO;

use App\Client\Core\Domain\Entity\Client\Client;

final readonly class GetClientByUUIDResponseDTO implements ResponseDTOContract
{
    public function __construct(
        private int $id,
        private string $uuid,
    )
    {
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

}

<?php
declare(strict_types=1);

namespace App\Client\Application\RequestDTO;

final readonly class GetClientByUUIDRequestDTO implements RequestDTOContract
{
    public function __construct(private string $uuid)
    {
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }



    public function toArray(): array
    {
        return [
            'uuid' => $this->uuid,
        ];
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }
}

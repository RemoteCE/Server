<?php

declare(strict_types=1);

namespace App\Client\Application\RequestDTO;

final readonly class CreateClientRequestDTO implements RequestDTOContract
{

    public function __construct(
        private ?string $name,
        private ?string $ip
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getIp(): string
    {
        return $this->ip;
    }


    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'ip' => $this->ip,
        ];
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

}

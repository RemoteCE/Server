<?php

namespace App\Client\Core\Domain\Entity\Client\Events;

use App\Client\Core\Domain\Entity\Client\Client;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ClientCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(public Client $client)
    {

    }

}

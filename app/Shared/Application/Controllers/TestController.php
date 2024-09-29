<?php
declare(strict_types=1);

namespace App\Shared\Application\Controllers;

use App\Client\Presentation\API\CreateClientAPI\CreateClientAPI;
use App\Client\Presentation\API\GetClientByUUIDAPI\GetClientByUUIDAPI;
use Illuminate\Support\Str;

class TestController
{
    public function test(CreateClientAPI $api)
    {
        return $api->create(Str::uuid()->toString());
    }
}

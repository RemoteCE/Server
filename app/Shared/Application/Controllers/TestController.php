<?php

declare(strict_types=1);

namespace App\Shared\Application\Controllers;

use App\Client\Presentation\API\CreateClientAPI\CreateClientAPI;
use Faker\Factory;

class TestController
{
    public function test(CreateClientAPI $api)
    {
        return $api->create(Factory::create()->name, Factory::create()->ipv4());
    }
}

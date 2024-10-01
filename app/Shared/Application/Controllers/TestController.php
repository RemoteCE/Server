<?php

declare(strict_types=1);

namespace App\Shared\Application\Controllers;

use App\Command\Presentation\API\CreateCommandAPI\CreateCommandAPI;

class TestController
{
    public function test(CreateCommandAPI $api)
    {
        return $api->create(1);
    }
}

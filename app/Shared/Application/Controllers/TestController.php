<?php

declare(strict_types=1);

namespace App\Shared\Application\Controllers;

use App\Stats\Presentation\API\CreateStatsAPI\CreateStatsAPI;

class TestController
{
    public function test(CreateStatsAPI $api)
    {
        return $api->create([
            'clientId' => 1
        ]);
    }
}

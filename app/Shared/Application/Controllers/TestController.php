<?php
declare(strict_types=1);

namespace App\Shared\Application\Controllers;

use App\Client\Application\API\CreateClientAPI\CreateClientAPIContract;
use App\Command\Application\API\UpdateCommandByClientIdAPI\UpdateCommandByClientIdAPIContract;
use App\Stats\Application\API\CreateStatsAPI\CreateStatsAPIContract;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class TestController
{
    public function test(UpdateCommandByClientIdAPIContract $api): void
    {
        $api->update(2, 'testCommand', null);
    }
}

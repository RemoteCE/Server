<?php
declare(strict_types=1);

namespace App\Shared\Application\Controllers;

use App\Client\Application\API\CreateClientAPI\CreateClientServiceContract;
use App\Client\Presentation\API\GetClientByUUIDAPI\GetClientByUUIDAPI;

class TestController
{
    public function test(GetClientByUUIDAPI $api): \Symfony\Component\HttpFoundation\Response
    {
        return $api->get('86787592-5a26-4c32-98fc-deae2e0b2afd');
    }
}

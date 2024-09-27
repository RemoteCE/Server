<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases\Domain\DeleteStatsByClientIdDomainCase;

use App\Client\Core\Domain\Entity\Client\Client;

interface DeleteStatsByClientIdDomainCaseContract
{
    /**
     * @param Client $client
     * @return void
     */
    public function delete(Client $client): void;
}

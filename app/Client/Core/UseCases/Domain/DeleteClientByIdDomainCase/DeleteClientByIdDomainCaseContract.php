<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases\Domain\DeleteClientByIdDomainCase;

use App\Client\Core\Domain\Entity\Client\Client;

interface DeleteClientByIdDomainCaseContract
{
    /**
     * @param Client $client
     * @return void
     */
    public function delete(Client $client): void;
}

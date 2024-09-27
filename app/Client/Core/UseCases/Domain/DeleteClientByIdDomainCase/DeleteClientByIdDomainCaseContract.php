<?php
declare(strict_types=1);

namespace App\Client\Core\UseCases\Domain\DeleteClientByIdDomainCase;

interface DeleteClientByIdDomainCaseContract
{
    public function deleteClient(int $id): void;
}

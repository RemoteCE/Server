<?php

declare(strict_types=1);

namespace App\Client\Core\UseCases\Service\CreateClientServiceCase;

use App\Client\Core\Contracts\Database\Repository\ClientRepositoryContract;
use App\Client\Core\Domain\Entity\Client\Client;
use App\Client\Core\Domain\Entity\Client\ValueObject\CreateClientValueObject\CreateClientValueObject;
use App\Client\Core\Domain\Entity\Client\ValueObject\IpValueObject;
use App\Client\Core\Domain\Entity\Client\ValueObject\NameValueObject;
use App\Client\Core\UseCases\Domain\CreateCommandDomainCase\CreateCommandDomainCaseContract;
use App\Client\Core\UseCases\Domain\CreateStatsDomainCase\CreateStatsDomainCaseContract;
use App\Client\Core\UseCases\Domain\DeleteCommandByClientIdDomainCase\DeleteCommandByClientIdDomainCaseContract;
use App\Client\Core\UseCases\Domain\DeleteStatsByClientIdDomainCase\DeleteStatsByClientIdDomainCaseContract;
use App\Client\Infrastructure\External\ExternalException;
use Illuminate\Support\Str;

readonly final class CreateClientServiceCase implements CreateClientServiceCaseContract
{
    public function __construct(
        private ClientRepositoryContract $clientRepository,
        private CreateCommandDomainCaseContract $createCommandDomainCase,
        private DeleteCommandByClientIdDomainCaseContract $deleteCommandByClientIdDomainCase,
        private CreateStatsDomainCaseContract $createStatsDomainCase,
        private DeleteStatsByClientIdDomainCaseContract $deleteStatsByClientIdDomainCase
    ) {
    }

    public function create(NameValueObject $nameValueObject, IpValueObject $ipValueObject): CreateClientValueObject
    {
        $client = $this->clientRepository->create(
            Client::fromArray([
                'uuid' => Str::uuid()->toString(),
                'name' => $nameValueObject->getName(),
                'ip' => $ipValueObject->getIp(),
            ])
        );

        try {
            $this->createCommandDomainCase->create($client);
            $this->createStatsDomainCase->create($client);

            return new CreateClientValueObject(
                true,
                $client->getUuid()
            );
        } catch (ExternalException) {
            $this->clientRepository->deleteById($client->getId());
            $this->deleteCommandByClientIdDomainCase->delete($client);
            $this->deleteStatsByClientIdDomainCase->delete($client);

            return new CreateClientValueObject(false);
        }
    }

}

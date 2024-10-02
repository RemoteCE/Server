<?php

namespace App\Shared\Application\Commands\CreateMappersCommand;

use Illuminate\Console\Command;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class CreateMappersCommand extends Command
{
    private string $service;
    private string $mapperName;
    private string $mapperBasePath;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:mappers {service} {mapperName}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): Response
    {
        if ($this->argument('service') == "" || $this->argument('mapperName') == "") {
            return response("service and mapperName required", ResponseAlias::HTTP_BAD_REQUEST);
        }

        $this->service = $this->argument('service');
        $this->mapperName = $this->argument('mapperName');
        $this->mapperBasePath = base_path("app/{$this->service}/Application/Mapper/");

        $this->makeBaseContracts();
        $this->makeBaseException();
        $this->makeMapperException();
        $this->makeToDTO();
        $this->makeToValueObject();

        return response("OK!");
    }

    private function makeToDTO(): void
    {
        $toDTOMapperName = "{$this->mapperName}ToDTOMapper";
        $toDTOMapperContractName = "{$toDTOMapperName}Contract";
        $toDTOMapperExceptionName = "{$toDTOMapperName}Exception";

        $toDTOMapperBasePath = base_path("app/{$this->service}/Application/Mapper/{$toDTOMapperName}/");
        $toDTOMapperClassPath = "{$toDTOMapperBasePath}/{$toDTOMapperName}.php";
        $toDTOMapperContractPath = "{$toDTOMapperBasePath}/{$toDTOMapperContractName}.php";
        $toDTOMapperExceptionPath = "{$toDTOMapperBasePath}/{$toDTOMapperExceptionName}.php";

        if (!File::exists($toDTOMapperClassPath)) {
            File::put($toDTOMapperClassPath, $this->getToDTOMapperClassContent());
        }

        if (!File::exists($toDTOMapperContractPath)) {
            File::put($toDTOMapperContractPath, $this->getToDTOMapperContractContent());
        }

        if (!File::exists($toDTOMapperExceptionPath)) {
            File::put($toDTOMapperExceptionPath, $this->getToDTOMapperExceptionContent());
        }
    }

    private function makeToValueObject(): void
    {
        $toValueObjectMapperName = "{$this->mapperName}ToValueObjectMapper";
        $toValueObjectMapperContractName = "{$toValueObjectMapperName}Contract";
        $toValueObjectMapperExceptionName = "{$toValueObjectMapperName}Exception";

        $toValueObjectMapperBasePath = "{$this->mapperBasePath}/{$toValueObjectMapperName}";
        $toValueObjectMapperClassPath = "{$toValueObjectMapperBasePath}/{$toValueObjectMapperName}.php";
        $toValueObjectMapperContractPath = "{$toValueObjectMapperBasePath}/{$toValueObjectMapperContractName}.php";
        $toValueObjectMapperExceptionPath = "{$toValueObjectMapperBasePath}/{$toValueObjectMapperExceptionName}.php";

        if (!File::exists($toValueObjectMapperClassPath)) {
            File::put($toValueObjectMapperClassPath, $this->getToValueObjectMapperClassContent());
        }

        if (!File::exists($toValueObjectMapperContractPath)) {
            File::put($toValueObjectMapperContractPath, $this->getToValueObjectMapperContractContent());
        }

        if (!File::exists($toValueObjectMapperExceptionPath)) {
            File::put($toValueObjectMapperExceptionPath, $this->getToValueObjectMapperExceptionContent());
        }
    }

    private function makeMapperException(): void
    {
        $mapperExceptionPath = "{$this->mapperBasePath}/{$this->mapperName}Mapper/{$this->mapperName}MapperException.php";

        if (!File::exists($mapperExceptionPath)) {
            File::put($mapperExceptionPath, $this->getMapperExceptionContent());
        }
    }

    private function makeBaseException(): void
    {
        $baseExceptionPath = "{$this->mapperBasePath}/MapperException.php";

        if (!File::exists($baseExceptionPath)) {
            File::put($baseExceptionPath, $this->getBaseExceptionContent());
        }
    }

    private function makeBaseContracts(): void
    {
        $toDTOMapperBaseContractPath = "{$this->mapperBasePath}/ToDTOMapperContract.php";
        $toValueObjectMapperBaseContractPath = "{$this->mapperBasePath}/ToValueObjectMapperContract.php";

        if (!File::exists($toDTOMapperBaseContractPath)) {
            File::put($toDTOMapperBaseContractPath, $this->getToDTOMapperBaseContractContent());
        }

        if (!File::exists($toValueObjectMapperBaseContractPath)) {
            File::put($toValueObjectMapperBaseContractPath, $this->getToValueObjectMapperBaseContractContent());
        }
    }

    private function getToDTOMapperClassContent(): string
    {
        return Str::replace(
            ['{this.service}', '{this.mapperName}'],
            [$this->service, $this->mapperName],
            File::get(__DIR__ . '/Assets/ToDTOMapperClassContent.txt')
        );
    }

    private function getToDTOMapperContractContent(): string
    {
        return Str::replace(
            ['{this.service}', '{this.mapperName}'],
            [$this->service, $this->mapperName],
            File::get(__DIR__ . '/Assets/ToDTOMapperContractContent.txt')
        );
    }

    private function getToDTOMapperExceptionContent(): string
    {
        return Str::replace(
            ['{this.service}', '{this.mapperName}'],
            [$this->service, $this->mapperName],
            File::get(__DIR__ . '/Assets/ToDTOMapperExceptionContent.txt')
        );
    }

    private function getToValueObjectMapperClassContent(): string
    {
        return Str::replace(
            ['{this.service}', '{this.mapperName}'],
            [$this->service, $this->mapperName],
            File::get(__DIR__ . '/Assets/ToValueObjectMapperClassContent.txt')
        );
    }

    private function getToValueObjectMapperContractContent(): string
    {
        return Str::replace(
            ['{this.service}', '{this.mapperName}'],
            [$this->service, $this->mapperName],
            File::get(__DIR__ . '/Assets/ToValueObjectMapperContractContent.txt')
        );
    }

    private function getToValueObjectMapperExceptionContent(): string
    {
        return Str::replace(
            ['{this.service}', '{this.mapperName}'],
            [$this->service, $this->mapperName],
            File::get(__DIR__ . '/Assets/ToValueObjectMapperExceptionContent.txt')
        );
    }

    private function getMapperExceptionContent(): string
    {
        return Str::replace(
            ['{this.service}', '{this.mapperName}'],
            [$this->service, $this->mapperName],
            File::get(__DIR__ . '/Assets/MapperExceptionContent.txt')
        );
    }

    private function getBaseExceptionContent(): string
    {
        return Str::replace(
            ['{this.service}', '{this.mapperName}'],
            [$this->service, $this->mapperName],
            File::get(__DIR__ . '/Assets/BaseMapperExceptionContent.txt')
        );
    }

    private function getToValueObjectMapperBaseContractContent(): string
    {
        return Str::replace(
            ['{this.service}', '{this.mapperName}'],
            [$this->service, $this->mapperName],
            File::get(__DIR__ . '/Assets/ToValueObjectMapperBaseContractContent.txt')
        );
    }

    private function getToDTOMapperBaseContractContent(): string
    {
        return Str::replace(
            ['{this.service}', '{this.mapperName}'],
            [$this->service, $this->mapperName],
            File::get(__DIR__ . '/Assets/ToDTOMapperBaseContractContent.txt')
        );
    }


}

<?php

namespace App\Shared\Application\Commands\CreateMappersCommand;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CreateMappersCommand extends Command
{
    private string $service;
    private string $mapperName;
    private string $mapperBasePath;
    private string $mapperPath;

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
    public function handle(): void
    {
        if ($this->argument('service') == "" || $this->argument('mapperName') == "") {
            echo 'service and mapperName required';
            return;
        }

        $this->service = $this->argument('service');
        $this->mapperName = $this->argument('mapperName');
        $this->mapperBasePath = base_path("app/{$this->service}/Application/Mapper/");
        $this->mapperPath = "{$this->mapperBasePath}/{$this->mapperName}Mapper/";

        $this->makeBaseContracts();
        $this->makeBaseException();
        $this->makeMapperException();
        $this->makeToDTO();
        $this->makeToValueObject();

        echo 'OK!';
    }

    private function makeFile(string|array $path, string $content = "sex"): void
    {
        if (is_array($path)) {
            foreach ($path as $file => $content) {
                if (!File::exists($file)) {
                    if (!File::exists(dirname($file))) {
                        File::makeDirectory(dirname($file), 0755, true);
                    }
                    File::put($file, $content);
                }
            }
            return;
        }

        if (!File::exists($path)) {
            if (!File::exists(dirname($path))) {
                File::makeDirectory(dirname($path), 0755, true);
                File::put($path, $content);
            }
        }
        return;
    }

    private function makeToDTO(): void
    {
        $toDTOMapperName = "{$this->mapperName}ToDTOMapper";
        $toDTOMapperContractName = "{$toDTOMapperName}Contract";
        $toDTOMapperExceptionName = "{$toDTOMapperName}Exception";

        $toDTOMapperBasePath = "{$this->mapperPath}/{$toDTOMapperName}/";
        $toDTOMapperClassPath = "{$toDTOMapperBasePath}/{$toDTOMapperName}.php";
        $toDTOMapperContractPath = "{$toDTOMapperBasePath}/{$toDTOMapperContractName}.php";
        $toDTOMapperExceptionPath = "{$toDTOMapperBasePath}/{$toDTOMapperExceptionName}.php";

        $this->makeFile([
            $toDTOMapperClassPath => $this->getToDTOMapperClassContent(),
            $toDTOMapperContractPath => $this->getToDTOMapperContractContent(),
            $toDTOMapperExceptionPath => $this->getToDTOMapperExceptionContent()
        ]);
    }

    private function makeToValueObject(): void
    {
        $toValueObjectMapperName = "{$this->mapperName}ToValueObjectMapper";
        $toValueObjectMapperContractName = "{$toValueObjectMapperName}Contract";
        $toValueObjectMapperExceptionName = "{$toValueObjectMapperName}Exception";

        $toValueObjectMapperBasePath = "{$this->mapperPath}/{$toValueObjectMapperName}/";
        $toValueObjectMapperClassPath = "{$toValueObjectMapperBasePath}/{$toValueObjectMapperName}.php";
        $toValueObjectMapperContractPath = "{$toValueObjectMapperBasePath}/{$toValueObjectMapperContractName}.php";
        $toValueObjectMapperExceptionPath = "{$toValueObjectMapperBasePath}/{$toValueObjectMapperExceptionName}.php";

        $this->makeFile([
            $toValueObjectMapperClassPath => $this->getToValueObjectMapperClassContent(),
            $toValueObjectMapperContractPath => $this->getToValueObjectMapperContractContent(),
            $toValueObjectMapperExceptionPath => $this->getToValueObjectMapperExceptionContent()
        ]);
    }

    private function makeMapperException(): void
    {
        $mapperExceptionPath = "{$this->mapperPath}/{$this->mapperName}MapperException.php";

        $this->makeFile($mapperExceptionPath, $this->getMapperExceptionContent());
    }

    private function makeBaseException(): void
    {
        $baseExceptionPath = "{$this->mapperBasePath}/MapperException.php";

        $this->makeFile($baseExceptionPath, $this->getBaseExceptionContent());
    }

    private function makeBaseContracts(): void
    {
        $toDTOMapperBaseContractPath = "{$this->mapperBasePath}/ToDTOMapperContract.php";
        $toValueObjectMapperBaseContractPath = "{$this->mapperBasePath}/ToValueObjectMapperContract.php";

        $this->makeFile([
            $toDTOMapperBaseContractPath => $this->getToDTOMapperBaseContractContent(),
            $toValueObjectMapperBaseContractPath => $this->getToValueObjectMapperBaseContractContent()
        ]);
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

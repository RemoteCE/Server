<?php
declare(strict_types=1);

namespace App\Client\Application\RequestDTOValidation\CreateClientRequestDTOValidation;

use App\Client\Application\RequestDTO\CreateClientRequestDTO;
use Illuminate\Support\Facades\Validator;

final readonly class CreateClientRequestDTOValidation implements CreateClientRequestDTOValidationContract
{
    public function validate(CreateClientRequestDTO $createClientRequestDTO): void
    {
        $validation = Validator::make($createClientRequestDTO->toArray(), [
            'uuid' => ['required', 'uuid', 'unique:clients,uuid'],
        ]);

        if($validation->fails()) {
            throw new CreateClientRequestDTOValidationException($validation->messages()->toJson());
        }
    }
}

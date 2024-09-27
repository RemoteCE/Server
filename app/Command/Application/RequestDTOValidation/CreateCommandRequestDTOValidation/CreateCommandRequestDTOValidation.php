<?php
declare(strict_types=1);

namespace App\Command\Application\RequestDTOValidation\CreateCommandRequestDTOValidation;

use App\Command\Application\RequestDTO\CreateCommandRequestDTO;
use App\Command\Application\RequestDTOValidation\CreateCommandRequestDTOValidation\CreateCommandRequestDTOValidationContract;
use Illuminate\Support\Facades\Validator;

class CreateCommandRequestDTOValidation implements CreateCommandRequestDTOValidationContract
{
    public function validate(CreateCommandRequestDTO $createCommandRequestDTO): void
    {
        $validation = Validator::make($createCommandRequestDTO->toArray(), [
            'clientId' => ['required', 'integer', 'exists:clients,id', 'unique:commands,client_id'],
        ]);

        if($validation->fails()) {
            throw new CreateCommandRequestDTOValidationException($validation->messages()->toJson());
        }
    }
}

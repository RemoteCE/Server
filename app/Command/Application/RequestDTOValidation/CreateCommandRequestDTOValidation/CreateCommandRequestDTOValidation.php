<?php

declare(strict_types=1);

namespace App\Command\Application\RequestDTOValidation\CreateCommandRequestDTOValidation;

use Illuminate\Support\Facades\Validator;

class CreateCommandRequestDTOValidation implements CreateCommandRequestDTOValidationContract
{
    public function validate(array $data): void
    {
        $validation = Validator::make($data, [
            'clientId' => ['required', 'integer', 'exists:clients,id', 'unique:commands,client_id'],
        ]);

        if ($validation->fails()) {
            throw new CreateCommandRequestDTOValidationException($validation->messages()->toJson());
        }
    }
}

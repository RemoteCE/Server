<?php

declare(strict_types=1);

namespace App\Client\Application\RequestDTOValidation\CreateClientRequestDTOValidation;

use Illuminate\Support\Facades\Validator;

final readonly class CreateClientRequestDTOValidation implements CreateClientRequestDTOValidationContract
{
    public function validate(array $data): void
    {
        $validation = Validator::make($data, [
            'name' => ['string', 'required', 'max:255', 'nullable'],
            'ip' => ['string', 'required', 'nullable', 'ipv4'],
        ]);

        if ($validation->fails()) {
            throw new CreateClientRequestDTOValidationException($validation->messages()->toJson());
        }
    }
}

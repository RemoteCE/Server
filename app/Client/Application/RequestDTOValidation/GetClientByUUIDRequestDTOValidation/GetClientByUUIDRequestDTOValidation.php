<?php

declare(strict_types=1);

namespace App\Client\Application\RequestDTOValidation\GetClientByUUIDRequestDTOValidation;

use Illuminate\Support\Facades\Validator;

final readonly class GetClientByUUIDRequestDTOValidation implements GetClientByUUIDRequestDTOValidationContract
{
    public function validate(array $data): void
    {
        $validation = Validator::make($data, [
            'uuid' => ['required', 'string', 'uuid', 'exists:clients,uuid'],
        ]);

        if ($validation->fails()) {
            throw new GetClientByUUIDRequestDTOValidationException($validation->messages()->toJson());
        }
    }
}

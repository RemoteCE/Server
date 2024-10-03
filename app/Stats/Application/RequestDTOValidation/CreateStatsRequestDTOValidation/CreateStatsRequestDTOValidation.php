<?php

declare(strict_types=1);

namespace App\Stats\Application\RequestDTOValidation\CreateStatsRequestDTOValidation;

use Illuminate\Support\Facades\Validator;

class CreateStatsRequestDTOValidation implements CreateStatsRequestDTOValidationContract
{

    public function validate(array $data): void
    {
        $validation = Validator::make($data, [
            'clientId' => ['required', 'integer', 'exists:clients,id'],
        ]);
        if ($validation->fails()) {
            throw new CreateStatsRequestRequestDTOValidationException($validation->messages()->toJson());
        }
    }

}

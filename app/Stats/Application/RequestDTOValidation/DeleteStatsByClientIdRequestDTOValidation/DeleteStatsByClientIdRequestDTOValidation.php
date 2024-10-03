<?php

declare(strict_types=1);

namespace App\Stats\Application\RequestDTOValidation\DeleteStatsByClientIdRequestDTOValidation;

use Illuminate\Support\Facades\Validator;

class DeleteStatsByClientIdRequestDTOValidation implements DeleteStatsByClientIdRequestDTOValidationContract
{

    public function validate(array $data): void
    {
        $validation = Validator::make($data, [
            'clientId' => ['required', 'integer'],
        ]);

        if ($validation->fails()) {
            throw new DeleteStatsByClientIdRequestRequestDTOValidationException($validation->messages()->toJson());
        }
    }
}

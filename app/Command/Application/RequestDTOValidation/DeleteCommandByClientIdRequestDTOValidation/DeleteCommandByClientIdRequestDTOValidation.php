<?php

declare(strict_types=1);

namespace App\Command\Application\RequestDTOValidation\DeleteCommandByClientIdRequestDTOValidation;

use Illuminate\Support\Facades\Validator;

class DeleteCommandByClientIdRequestDTOValidation implements DeleteCommandByClientIdRequestDTOValidationContract
{


    public function validate(array $data): void
    {
        $validation = Validator::make($data, [
            'clientId' => ['required', 'integer'],
        ]);

        if ($validation->fails()) {
            throw new DeleteCommandByClientIdRequestDTOValidationException($validation->messages()->toJson());
        }
    }
}

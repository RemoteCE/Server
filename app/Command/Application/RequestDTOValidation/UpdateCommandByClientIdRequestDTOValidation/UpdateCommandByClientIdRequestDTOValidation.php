<?php

declare(strict_types=1);

namespace App\Command\Application\RequestDTOValidation\UpdateCommandByClientIdRequestDTOValidation;

use App\Command\Application\RequestDTO\UpdateCommandByClientIdRequestDTO;
use Illuminate\Support\Facades\Validator;

class UpdateCommandByClientIdRequestDTOValidation implements UpdateCommandByClientIdRequestDTOValidationContract
{

    public function validate(UpdateCommandByClientIdRequestDTO $updateCommandByClientIdRequestDTO): void
    {
        $validation = Validator::make($updateCommandByClientIdRequestDTO->toArray(), [
            'clientId' => ['required', 'integer', 'exists:clients,id'],
            'newClientId' => ['required', 'integer', 'nullable', 'exists:clients,id'],
            'command' => ['required', 'string', 'nullable'],
            'response' => ['required', 'string', 'nullable'],
        ]);

        if ($validation->fails()) {
            throw new UpdateCommandByClientIdRequestDTOValidationException($validation->messages()->toJson());
        }
    }
}

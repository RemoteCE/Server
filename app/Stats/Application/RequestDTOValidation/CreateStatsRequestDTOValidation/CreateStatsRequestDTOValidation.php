<?php
declare(strict_types=1);

namespace App\Stats\Application\RequestDTOValidation\CreateStatsRequestDTOValidation;

use App\Stats\Application\RequestDTO\CreateStatsRequestDTO;
use Illuminate\Support\Facades\Validator;

class CreateStatsRequestDTOValidation implements CreateStatsRequestDTOValidationContract
{

    public function validate(CreateStatsRequestDTO $createStatsRequestDTO): void
    {
        $validation = Validator::make($createStatsRequestDTO->toArray(), [
            'clientId' => ['required', 'integer', 'exists:clients,id'],
        ]);
        if ($validation->fails()) {
            throw new CreateStatsRequestDTOValidationException($validation->messages()->toJson());
        }
    }

}

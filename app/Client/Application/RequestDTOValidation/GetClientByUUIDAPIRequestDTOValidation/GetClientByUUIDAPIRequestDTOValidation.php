<?php
declare(strict_types=1);

namespace App\Client\Application\RequestDTOValidation\GetClientByUUIDAPIRequestDTOValidation;

use App\Client\Application\RequestDTO\GetClientByUUIDRequestDTO;
use Illuminate\Support\Facades\Validator;

final readonly class GetClientByUUIDAPIRequestDTOValidation implements GetClientByUUIDAPIRequestDTOValidationContract
{
    public function validate(GetClientByUUIDRequestDTO $getClientByUUIDRequestDTO): void
    {
        $validation = Validator::make($getClientByUUIDRequestDTO->toArray(), [
            'uuid' => ['required', 'string', 'uuid', 'exists:clients,uuid'],
        ]);

        if($validation->fails()) {
            throw new GetClientByUUIDAPIRequestDTOValidationException($validation->messages()->toJson());
        }
    }
}

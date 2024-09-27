<?php
declare(strict_types=1);

namespace App\Command\Application\RequestDTOValidation\DeleteCommandByClientIdRequestDTOValidation;

use App\Command\Application\RequestDTO\DeleteCommandByClientIdRequestDTO;
use Illuminate\Support\Facades\Validator;

class DeleteCommandByClientIdRequestDTOValidation implements DeleteCommandByClientIdRequestDTOValidationContract
{


    public function validate(DeleteCommandByClientIdRequestDTO $deleteCommandByClientIdRequestDTO): void
    {
        $validation = Validator::make($deleteCommandByClientIdRequestDTO->toArray(), [
            'clientId' => ['required', 'integer'],
        ]);

        if($validation->fails()) {
            throw new DeleteCommandByClientIdRequestDTOValidationException($validation->messages()->toJson());
        }
    }
}

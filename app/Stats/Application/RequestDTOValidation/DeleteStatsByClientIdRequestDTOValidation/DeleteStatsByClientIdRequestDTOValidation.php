<?php
declare(strict_types=1);

namespace App\Stats\Application\RequestDTOValidation\DeleteStatsByClientIdRequestDTOValidation;

use App\Stats\Application\RequestDTO\DeleteStatsByClientIdRequestDTO;
use App\Stats\Application\RequestDTOValidation\DeleteStatsByClientIdRequestDTOValidation\DeleteStatsByClientIdRequestDTOValidationContract;
use Illuminate\Support\Facades\Validator;

class DeleteStatsByClientIdRequestDTOValidation implements DeleteStatsByClientIdRequestDTOValidationContract
{

    public function validate(DeleteStatsByClientIdRequestDTO $deleteStatsByClientIdDTO): void
    {
        $validation = Validator::make($deleteStatsByClientIdDTO->toArray(), [
            'clientId' => ['required', 'integer'],
        ]);

        if($validation->fails()) {
            throw new DeleteStatsByClientIdRequestDTOValidationException($validation->messages()->toJson());
        }
    }
}

<?php

namespace App\Command\Infrastructure\Database\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'command',
        'response'
    ];

    public function updateWithoutNulls(array $attributes): bool
    {
        return $this->update(
            array_filter($attributes, function ($value) {
                return !is_null($value);
            })
        );
    }
}

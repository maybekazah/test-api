<?php

namespace App\DTO;


use Spatie\LaravelData\Data;

class DTO extends Data
{
    public static function create(mixed $data): static
    {
        return static::from($data);
    }
}

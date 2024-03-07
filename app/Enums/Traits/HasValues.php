<?php

namespace App\Enums\Traits;

trait HasValues
{
    public static function values(): array
    {
        return array_column(self::toArray(), 'value');
    }

    public static function toArray()
    {
        return (new \ReflectionClass(static::class))->getConstants();
    }
}

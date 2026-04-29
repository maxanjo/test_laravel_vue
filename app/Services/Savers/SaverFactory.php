<?php

namespace App\Services\Savers;

use InvalidArgumentException;

class SaverFactory 
{
    public static function make(string $type): SaverInterface 
    {
        return match($type) {
            'db' => new DatabaseSaver(),
            'email' => new EmailSaver(),
            default => throw new InvalidArgumentException("Неизвестный тип сохранения: {$type}"),
        };
    }
}
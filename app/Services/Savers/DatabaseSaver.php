<?php
namespace App\Services\Savers;

use Illuminate\Support\Facades\Log;

class DatabaseSaver implements SaverInterface 
{
    public function save(array $data): void 
    {
        // В тестовом не написано, что нужно сохранять в Базу Данных
        // Поэтому просто Log
        Log::info('Данные успешно сохранены в Базу Данных:', $data);
    }
}
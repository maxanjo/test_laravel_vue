<?php
namespace App\Services\Savers;

use Illuminate\Support\Facades\Log;

class EmailSaver implements SaverInterface 
{
    public function save(array $data): void 
    {
        Log::info('Данные успешно отправлены на Email:', $data);
    }
}
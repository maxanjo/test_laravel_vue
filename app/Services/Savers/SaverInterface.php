<?php

namespace App\Services\Savers;

interface SaverInterface 
{
    public function save(array $data): void;
}
<?php

namespace App\Services;

class MainOperations
{
    public static function generateHash(): string
    {
        // gerar uma Hash de 32 caracteres
        return bin2hex(random_bytes(16));
    }
}
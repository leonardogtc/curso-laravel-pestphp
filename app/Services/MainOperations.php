<?php

namespace App\Services;

class MainOperations
{
    public static function generateHash($numchar = 32): string
    {
        // gerar uma Hash de 32 caracteres
        return bin2hex(random_bytes((int)$numchar / 2));
    }
}
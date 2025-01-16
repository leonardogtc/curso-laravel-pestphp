<?php

namespace App\Services;

class MainOperations
{
    public static function generateHash($numchar = 32): string
    {
        // gerar uma Hash de 32 caracteres
        return bin2hex(random_bytes((int)$numchar / 2));
    }

    public static function mathOperation($a, $b, $operation): int|float|null {
        // Escuta uma das 4 operações básicas
        switch ($operation) {
            case 'add':
                return $a + $b;
                break;
            case 'subtract':
                return $a - $b;
                break;
            case 'multiply':
                return $a * $b;
                break;
            case 'divide':
                return $a / $b;
                break;
            
            default:
                return null;
                break;
        }
    }
}

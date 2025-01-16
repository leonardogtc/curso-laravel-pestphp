<?php

use App\Services\MainOperations;

describe('MainOperations - Testar o método MathOperation', function () {
    // Agora pode-se realizar vários testes:
    test('Adição', function () {
        $a = 10;
        $b = 5;
        $operation = "add";

        $result = MainOperations::mathOperation($a, $b, $operation);
        expect($result)->toBe(15);
    });

    test('Subtração', function () {
        $a = 10;
        $b = 5;
        $operation = "subtract";

        $result = MainOperations::mathOperation($a, $b, $operation);
        expect($result)->toBe(5);
    });

    test('Multiplicação', function () {
        $a = 10;
        $b = 5;
        $operation = "multiply";

        $result = MainOperations::mathOperation($a, $b, $operation);
        expect($result)->toBe(50);
    });

    test('Divisão', function () {
        $a = 10;
        $b = 5;
        $operation = "divide";

        $result = MainOperations::mathOperation($a, $b, $operation);
        expect($result)->toBe(2);
    });

});

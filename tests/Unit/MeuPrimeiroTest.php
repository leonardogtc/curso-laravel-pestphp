<?php

test('example', function () {
    
    // Primeira versão
    $value = true;

    // Segunda versão
    // $value = false;

    expect($value)->toBeTrue();
});

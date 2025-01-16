<?php

test('Gerar uma hash com o número de caracteres esperados', function () {

    expect(strlen(MainOperations::generateHash()))->toBe(32);
    
});

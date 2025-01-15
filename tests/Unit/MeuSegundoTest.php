<?php

test('o meu segundo teste', function () {
    $name = "Leonardo";
    // Testando se o valor dentro do nome é do tipo String
    expect($name)->toBeString();
});

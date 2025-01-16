<?php

describe('Testes com datasets',function(){
    // Coleção de dados
    $cliente = [
        ['João',18],
        ['Carlos',28],
        ['Ana',15],
    ];

    // Teste
    it('Verificar se todos tem nome', function($name, $age){
        expect($name)->toBeString();
    })->with($cliente);

    it('Verificar se a idade é maior ou igual a 18', function($name, $age){
        expect($age)->toBeGreaterThanOrEqual(18);
    })->with($cliente);
});
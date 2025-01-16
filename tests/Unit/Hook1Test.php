<?php

beforeEach(function () {
    $this->number1 = 10;
    $this->number2 = 20;
});

describe('Testes com Hooks', function () {
    it('test1', function () {

        echo 'Teste 1' . PHP_EOL;
        echo "number1" . $this->number1 . PHP_EOL;
        echo "number2" . $this->number2 . PHP_EOL;
        expect($this->number1)->toBe(10);
    });
});

afterEach(function(){
    unset($this->number1);
    unset($this->number2);
});

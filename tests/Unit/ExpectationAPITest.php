<?php

describe('Test Expectation function (API)', function () {
    it('tests the toBe() functions', function () {
        $value = 10;
        expect($value)->toBe(10);
        expect($value)->toBeInt()->toBe(10);
    });

    it('tests the toBeTrue() and toBeFalse() functions', function () {
        $value1 = true;
        $value2 = false;
        expect($value1)->toBeTrue();
        expect($value2)->toBeFalse();
    });

    it('tests the toBeNull() function', function () {
        $value1 = null;
        expect($value1)->toBeNull();
    });

    it('tests the toBeEmpty() function', function () {
        $value1 = '';
        expect($value1)->toBeEmpty();
    });

    it('tests the toBeArray() function', function () {
        $value1 = [];
        expect($value1)->toBeArray();
    });

    // Testa se determinado valor existe dentro de uma coleção
    it('tests the toBeIn() function', function () {
        $value1 = 10;
        $value2 = [10, 20, 30];
        expect($value1)->toBeIn($value2);
    });

    // Testa se o valor é um Json válido!
    it('tests the toBeJson() function', function () {
        $value1 = '{"name":"João"}';
        expect($value1)->toBeJson();
    });

    // Expressões regulares
    it('tests the toMatch() function', function () {
        $value = 'Hello World';
        expect($value)->toMatch('/Hello/');
    });

    // Expressões regulares
    it('tests the toBeUpperCase() function', function () {
        $value = 'HELLOWORLD';
        expect($value)->toBeUpperCase();
    });

    
});
